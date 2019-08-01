<?php

namespace App\Http\Controllers\FrontEnd;

use App\Model\Event;
use App\Model\Ticket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Image;
use App\Model\Kind;
use App\Model\Banner;
class HomeController extends Controller
{
    public function index(){

        $events = Event::where('status', 0)
            ->where('is_confirm', 1)
            ->paginate(8);;
        $kinds = Kind::all();
        $banners = Banner::all();

        return view('FrontEnd.home', ['events'=>$events,'kinds'=>$kinds,'banners'=>$banners]);
    }
    public function filterEvents(Request $request) {
        $city_id = $request->input('city_id');
        $kind_id = $request->input('kind_id');
        $is_free= $request->input('is_free');

        $eventBuider = Event::query();

        if($city_id != null && $city_id != 'all') {
            $eventBuider->where('city_id', $city_id);
        }
        if($kind_id != null) {
            $eventBuider->where('kind_id','like', '%'.$kind_id.'.%')
                ->orWhere('kind_id','like' ,'%.'.$kind_id.'%')
            ->orWhere('kind_id','like', '%'.$kind_id.'%');
        }
        $events = $eventBuider->where('is_confirm', 1)->paginate(8);
        $kinds = Kind::all();
        return view('FrontEnd.ajax_event', ['events'=>$events, 'kinds'=>$kinds]);
    }
    public function searchByCity(Request $request) {
        $city = $request->city;
        if($city == 'ha-noi') {
            $events = Event::where('city_id', '01TTT')->where('is_confirm', 1)->paginate(8);
        } else if($city == 'ho-chi-minh') {
            $events = Event::where('city_id', '79TTT')->where('is_confirm', 1)->paginate(8);
        } else if($city == 'dia-diem-khac') {
            $events = Event::where('city_id', '<>', '01TTT')
            ->where('city_id', '<>', '79TTT')->where('is_confirm', 1)
                ->paginate(8);
        }
        $kinds = Kind::all();
        return view('FrontEnd.home', ['events'=>$events, 'kinds'=>$kinds]);
    }

    public function createEvent() {
        $provinces = DB::table('province')->get();
        $kinds = Kind::all();
        return view('FrontEnd.create_event', ['provinces'=>$provinces, 'kinds'=>$kinds]);
    }

    public function submit(Request $request)
    {
//        $request->validate([
//            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
        $data = $request->all();
        $num_ticket = count($data['ticket_date_start']);

        $event = new Event();
        $event->name = $data['event_name'];
        $event->user_id = Auth::user()->user_id;
        $kind = implode($data['kind'], '.');
        $event->location = $data['location'];


        $event->kind_id = $kind;
        $event->city_id = $data['city'];
        $event->district_id = $data['district'];
        $event->address = $data['address'];
//        $event->event_info = $data['event_info'];
        $event->organizer = $data['organization'];
        $event->org_info = $data['org_info'];
        $event->phone_org = $data['phone'];
        $event->email_org = $data['email'];
        $event->event_start = $data['event_date_start'] . ' ' . $data['event_time_start'];
        $event->event_end = $data['event_date_end'] . ' ' . $data['event_time_end'];
        $event->status = 0;


        $message = Input::get('event_info'); // Summernote input field
        $dom = new \DOMDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');


        // foreach <img> in the submited message
        foreach($images as $img){
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){

                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                // Generating a random filename
                $filename = uniqid();
                $filepath = "/storage/images/$filename.$mimetype";

                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                    // resize if required
                    /* ->resize(300, 200) */
                    ->encode($mimetype, 100) 	// encode file to the specified mimetype
                    ->save(public_path($filepath));

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            } // <!--endif
        } // <!--endforeach

        $event->event_info = $dom->saveHTML();

        $event->save();
        // url
        if($data['url'] != null || $data['url'] != '') {
            $event->url = $data['url'];
        } else {
            $event->url = $event->event_id;
        }
        if (Input::hasFile('logo')) {
            $extension = Input::file('logo')->getClientOriginalExtension();
            $logoFullName = $event->event_id.'.'.$extension;
            $request->file('logo')->storeAs('logos', $logoFullName);
            $event->logo = $logoFullName;
            $event->save();
        }

        for ($i = 0; $i < $num_ticket; $i++) {
            $ticket = new Ticket();
            $ticket->price = $data['price'][$i];
            $ticket->qty = $data['qty'][$i];
            $ticket->max_per = $data['maxqty'][$i];
            $ticket->description = $data['ticket_desc'][$i];
            $ticket->sell_start = $data['ticket_date_start'][$i] .' '.$data['ticket_time_start'][$i];
            $ticket->sell_end = $data['ticket_date_end'][$i]. ' ' . $data['ticket_time_end'][$i];
            $ticket->event_id = $event->event_id;
            $ticket->save();
        }
return redirect('my-info/my-event');
    }


    public function getDistrict($id) {
        $data = DB::table('district')->where('provinceid', $id)->get();
        return $data;
    }
    public function gt(Request $request){
        $event = Event::find($request->event_id);
        return view('FrontEnd.gt',['event'=>$event]);
    }
    public function ttv(Request $request){
        $tickets = Ticket::where('event_id', $request->event_id)->get();
        return view('FrontEnd.ttv',['tickets'=>$tickets]);
    }
    public function ntc(Request $request){
        $event = Event::find($request->event_id);
        return view('FrontEnd.ntc',['event'=>$event]);
    }
    public function tl(Request $request){
        $event = Event::find($request->event_id);
        return view('FrontEnd.tl',['event'=>$event]);
    }
    public function getCheckout($event_id){
        $event = Event::find($event_id);
        return view('FrontEnd.checkout',['event'=>$event]);
    }
    public function endCheckout(){
        return view('FrontEnd.end_checkout');
    }
    public function getDetail($url){
        $event = Event::where('url', $url)
//            ->where('status', 1)
            ->first();

        return view('FrontEnd.detail_event', ['event'=>$event]);
    }

}


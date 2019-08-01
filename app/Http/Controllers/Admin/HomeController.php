<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Event;
use App\Model\Ticket;
use App\User;
use App\Model\Banner;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function getHome()
    {
        return view('admin.home');
    }
    public function getEvent()
    {
        $now = Carbon::now()->toDateTimeString();
        $events = Event::where('is_confirm',1)->where('event_start','>',  $now)->get();
        return view('admin.event_list', ['events'=>$events]);

    }
    public function getHotevent()
    {
        $now = Carbon::now()->toDateTimeString();
        $events = Event::where('status', 1)->where('event_start','>',  $now)->get();
        return view('admin.hot_event',['events'=>$events]);
    }
    public function getConfirmevent()
    {
        $events = Event::where('is_confirm', 0)->get();
        return view('admin.confirm_events',['events'=>$events]);
    }
    public function confirm(Request $request) {
        Event::find($request->event_id)->update(['is_confirm'=> 1]);
        $events = Event::where('is_confirm', 0)->get();
        return view('admin.ajax_event_confirm', ['events'=>$events]);
    }
    public function index(){
        return view('home');
    }
    public function getDeleteevent($event_id){
        $events = Event::find($event_id);
        $events->delete();
        return redirect('admin/confirmevent');
    }
    public function addBanner() {

    }
    public  function settingBanner(){
        $img_banners= Banner::all();
        return view('admin.setting_banner',['img_banners'=>$img_banners]);
    }
    public function updateStatusBanner(Request $request) {
        $value = $request->value=='true'? 1: 0;
        $id = $request->id;
        Banner::find($id)->update(['status'=> $value]);
        $img_banners= Banner::all();
        return view('admin.ajax_banner',['img_banners'=>$img_banners]);
    }
    public function delete_banner($banner_id){
        $banners = Banner::find($banner_id);
        $banners->delete();
        return redirect('admin/setting_banner');
    }
    public  function settingFooter(){
        return view('admin.setting_footer');
    }
    public  function settingCategory(){
        return view('admin.setting_category');
    }
    public  function getUser(){
        $users = User::all();
        return view('admin.user_list',['users'=>$users]);
    }
}

<?php

namespace App\Http\Controllers\FrontEnd;

use App\Model\Ticket;
use app\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;
use App\Model\Event;

class UserController extends Controller
{
    public function profile(){
        return view('FrontEnd.update_user');
    }
    public function getProfile(Request $request){

        $birthday = Carbon::createFromFormat('Y-m-d', $request->birthday )->toDateTimeString();
        Auth::user()
            ->update(['name'=>$request->input('name'),'birthday'=>$birthday,'phone'=>$request->input('phone'),'address'=>$request->input('address'),'job'=>$request->input('job')]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(130,130)->save(public_path('/uploads/image/'. $filename));
            $user = Auth::user();
            $user->image = $filename;
            $user->save();
        }
        return view('FrontEnd.update_user');
    }
    public function myBank(){
        return view('FrontEnd.bank');
    }
    public function getBank(Request $request){
        Auth::user()
            ->update(['chu_tk'=>$request->input('chu_tk'),'so_tk'=>$request->input('so_tk'),'ten_ngan_hang'=>$request->input('ten_ngan_hang'),'chi_nhanh'=>$request->input('chi_nhanh')]);

        return view('FrontEnd.bank');
    }
public function update() {

}


    public function myTicket(){

        return view('FrontEnd.ve_da_mua');
    }
    public function revenue(){
        return view('FrontEnd.so_du_tk');
    }
    public function myEvent(){
            $events= Event::where('user_id',\Auth::user()->user_id)->get();
        return view('FrontEnd.event_da_tao',['events'=>$events]);
    }
    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }
    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }
}

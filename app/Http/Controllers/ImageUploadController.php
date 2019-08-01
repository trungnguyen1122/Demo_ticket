<?php

namespace App\Http\Controllers;

use App\Model\Banner;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{


    public function imageUploadPost()

    {

        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('storage/banner'), $imageName);
        $banner = new Banner();
        $banner->img = $imageName;
        $banner->description = request()->description;
        $banner->save();

        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName);

    }
}

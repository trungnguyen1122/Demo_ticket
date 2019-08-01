<?php

namespace App\Http\Controllers\FrontEnd;

use App\Model\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

    public function autocomplete(Request $request)
    {

        $term=$request->term;
        $data=Event::where('name','LIKE','%'.$term.'%')->take(10)->get();

        $results=array();
        foreach ($data as $key => $v) {
            $results[]=['id'=>$v->url,'value'=>$v->name];
        }

        return response()->json($results);

    }
}

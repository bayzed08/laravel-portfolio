<?php

namespace App\Http\Controllers;

use App\Models\visitorModel;
use Illuminate\Http\Request;

class visitorController extends Controller
{
    function Visitorindex(){
        $visitor=json_decode(visitorModel::orderBy('id','desc')->take(1000)->get());

      //  $visitor= visitorModel::orderBy('id','desc')->take(1000)->get();
        return view('Visitor',['visitorData'=>$visitor]);
    }
}

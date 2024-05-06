<?php

namespace App\Http\Controllers;

use App\Models\ServicesModel;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    function ServiceIndex(){
    //    $serviceData=ServicesModel::all();

    //    return view('Service',['serviceData'=>$serviceData]);
    return view('Service');
    }

    function ServiceData(){
        $serviceData=json_decode(ServicesModel::all());

        return $serviceData;
    }
    function ServiceDelete(Request $request){
        $id=$request->input('id');
        $result=ServicesModel::where('id','=',$id)->delete();
        if ($result==true) {
            return 1;
        } else {
            return 0;
        }

    }
}



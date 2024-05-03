<?php

namespace App\Http\Controllers;

use App\Models\ServicesModel;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    function ServiceIndex(){
       $serviceData=ServicesModel::all();
        return view('Service',['serviceData'=>$serviceData]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ServicesModel;
use App\Models\visitorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    function HomeIndex(){
        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");
        // visitorModel::insert(['ip_address' => $UserIP,'visit_time'=>$timeDate]);
        //  or
        DB::insert('insert into visitor (ip_address, visit_time) values (?, ?)', [$UserIP, $timeDate]);
        $serviceData=ServicesModel::all();
        return view('Home',['serviceData' => $serviceData]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleController extends Controller
{
    function test(){
        $arr = array(1,2 ,3,4, 5,6,7);
        return view('admin/sample2',['data'=>$arr]);
    }
}

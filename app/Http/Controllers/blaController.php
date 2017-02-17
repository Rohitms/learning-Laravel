<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blaController extends Controller
{
    //
    public function mul(){
    return view ("mul");}
    public function dispmul(Request $request){
    $pro=$request->number1*$request->number2;      
    return view('dispmul',['result'=>$pro]);
}
    }


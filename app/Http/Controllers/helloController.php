<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    //
    public function ggwp(){
    return view ("calc");}
    public function add(Request $request){
    $sum=$request->number1+$request->number2;      
    return view('sum',['result'=>$sum]);
}
}
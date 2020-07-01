<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
    	return view('Register');
    }
    public function welcome(){
    	return view('SelamatDatang');
    }
    public function welcome_post(Request $request){
    	dd($request->all());
    	$nama = $request["Firstname"];
    	return "$nama";
    }    
}

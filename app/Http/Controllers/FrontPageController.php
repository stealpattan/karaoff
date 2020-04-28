<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //
    public function index(){
    	$items = \DB::table('category')->get();
    	return view('frontPage', [
    		'items'=>$items
    	]);
    }
}

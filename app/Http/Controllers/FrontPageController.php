<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Facade\FrontPageFacade;

class FrontPageController extends Controller
{
    //
    public function index(){
    	// initialize facade
    	$facade = new FrontPageFacade;
    	// call initialize method
    	$test = $facade->httpRequestTest();
    	return view('frontPage' , compact('test'));
    }
}

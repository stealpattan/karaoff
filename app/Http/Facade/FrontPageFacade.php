<?php 

namespace APP\Http\Facade;

use App\Http\Service\HttpConnect;

class FrontPageFacade{

	public function getAllCategory(){
		// 
	}

	public function getFrontPageCategory(){
		//
	}

	public function httpRequestTest(){
		$test = new HttpConnect;
		return $test->getTest();
	}
}
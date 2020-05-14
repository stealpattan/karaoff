<?php 

namespace APP\Http\Service;

class HttpConnect{
	public function getTest(){
		// initialize client
		$client = new \GuzzleHttp\Client();
		// execute request
		$response = $client->request('GET', 'https://www.google.com');
		// return
		return $response->getBody();
	}
}












 ?>
<?php 

namespace APP\Http\Service;

use Log;

class HttpConnect{
	public function getTest(){
		// initialize client
		$client = new \GuzzleHttp\Client();
		// execute request
		$response = $client->request('GET', 'https://www.google.com');
		// return
		return $response->getBody();
	}

	// DBサーバ、ログインAPI呼び出し
	public function callLoginAPI(){
		try {			
			// クライアントの初期化
			$client = new \GuzzleHttp\Client();
			// nodeAPIの呼び出し処理
			$res = $client->request('GET', 'http://localhost:3000/getUser/');
			// return 
			return $res->getBody();

		} catch (Exception $e) {
			Log::debug($e);
			return "{error}";	
		}
	}
}












 ?>
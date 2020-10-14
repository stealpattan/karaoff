<?php 

namespace APP\Http\Facade;

use Illuminate\Http\Request;

class APIFacade{
	public function redirect($route, Request $parameter){
		$result = "";
		switch ($route) {
			case 'login':
				$result = $this->loginExecuteAPI($parameter);
				break;
			
			default:
				$result = "{error}";
				break;
		}
		return $result;
	}

	public function loginExecuteAPI($parameter){
		// メールアドレスとパスワードが送信されてきているかチェック
		// nodeAPIを呼び出す
		// 結果を返す
		$status = array(
			'condition'=>'succes',
			'userName'=>'伊藤翔馬',
			'email'=>'stealpattan@gmail.com'
		);
		return $status;
	}
}

 ?>
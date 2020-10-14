<?php 

namespace APP\Http\Facade;

use Illuminate\Http\Request;
use App\Http\Service\HttpConnect;

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
		$connection = new HttpConnect;
		$res = $connection->callLoginAPI();
		// 結果を返す
		return $res;
	}
}

 ?>
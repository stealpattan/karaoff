<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Facade\APIFacade;
use Log;

class APIController extends Controller
{
    // API受け口, クエリパラメータで呼び出す処理を分岐させる
    public function index($route, Request $req){
        try {    
            $facade = new APIFacade;
            $result = $facade->redirect($route, $req);
            Log::debug($result);
            $json = json_encode($result);
            return response($json);
        } catch (Exception $e) {
            Log::debg($e);
            return response("fail");
        }
    }
}

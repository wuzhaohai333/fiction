<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * 公用的方法  返回json数据，进行信息的提示
     * @param $status 状态
     * @param string $message 提示信息
     * @param array $data 返回数据
     */
    public function showMsg($status,$message = '',$data = array()){
        $result = array(
            'status' => $status,
            'message' =>$message,
            'data' =>$data
        );
       return json_encode($result);
    }
}

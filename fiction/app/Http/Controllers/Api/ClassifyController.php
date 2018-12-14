<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Exceptions\Hint;
class ClassifyController extends Controller
{
    //分类列表
    public function classifyList(){
        $data=DB::table('fiction_cart')->get();
        return $this->showMsg(Hint::SUCCESS_CODE,'分类列表请求成功',$data);
    }
}


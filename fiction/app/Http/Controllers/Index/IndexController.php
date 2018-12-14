<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //首页
    public function in(){
        $url='http://api.fictions.com/is_recommend';
        $url_sift='http://api.fictions.com/sift';
        $json_data=curlRequest($url);
        $json_data_sift=curlRequest($url_sift);
        $data=json_decode($json_data,true);
        $data_sift=json_decode($json_data_sift,true);
        //dd($data_sift['data']);
        return view('home.index',['data'=>$data['data'],'data_sift'=>$data_sift['data']]);
    }
    //天气
    public function index(){
        $a_id='82228';
        $key='8bccd34c687245bfb55ef4fb94e55f10';
        $url="https://www.baidu.com/";
        $str=curl($url);
        dd($str);
    }
}

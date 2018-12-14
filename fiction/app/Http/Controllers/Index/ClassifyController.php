<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassifyController extends Controller
{
    //分类视图
    public function classify(){
        $url="http://api.fictions.com/classify_list";
        $json=curlRequest($url);
        $data=json_decode($json,true);
        //dd($data);
        return view('home.classify',['data'=>$data['data']]);
    }
}

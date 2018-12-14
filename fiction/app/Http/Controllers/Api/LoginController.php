<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Exceptions\Hint;
class LoginController extends Controller
{
    //aip登录
    public function getVerify(Request $request){
        $callback=$request->input('callbackparam');
        $user_name=$request->input('user_name');
        $user_pwd=$request->input('user_pwd');
        if(empty($user_name)){
            echo $callback."(".$this->showMsg(Hint::FAIL_CODE,'账号密码不能为空').")";die;
        }
        if(empty($user_pwd)){
            echo $callback."(".$this->showMsg(Hint::FAIL_CODE,'账号密码不能为空').")";die;
        }
        //$back=$request->input('back');
        $where=[
            'user_name'=>$user_name,
            'user_pwd'=>md5($user_pwd)
        ];
        //dd($where);die;
        $data=DB::table('fiction_user')->where($where)->first();
        if($data){
            $str=json_encode($data);
            $arr=json_decode($str,true);
           //echo $callback."(".json_encode(['status'=>111]).")";
            echo $callback."(".$this->showMsg(Hint::SUCCESS_CODE,'login si success',$arr).")";
            die;
        }else{
            echo $user_pwd.$callback."(".$this->showMsg(Hint::ERROR_CODE,Hint::ERROR_CODE_MSG).")";
            die;
        }

    }
    //api 注册
    public function loginDo(Request $request){
        $arr=$request->all();
        if(empty($arr)){
            return $this->showMsg(Hint::FAIL_LOGIN_CODE,'用户信息不能为空',$arr);
        }
        $id=DB::table('fiction_user')->insertGetId($arr);
        if($id){
            return $this->showMsg(Hint::SUCCESS_CODE,'注册成功',$id);
        }else{
            return $this->showMsg(Hint::FAIL_LOGIN_CODE,'注册失败请重试');
        }
    }
}

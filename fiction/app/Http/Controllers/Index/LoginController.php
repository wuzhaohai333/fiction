<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    //登录视图
    public function login(){
        return view('home.login');
    }
    //注册视图
    public function register(){
        return view('home.register');
    }
    //执行登录
    public function loginDo(Request $request){
        $name=$request->input('name');
        $id=$request->input('id');
        if(!empty($name)&&!empty($id)){
            $request->session()->put('name',$name);
            $request->session()->put('id',$id);
            echo 1;
        }else{
            echo 2;
        }
    }
    //执行注册
    public function registerDo(Request $request){
        $arr=$request->input();
        if($arr['pwd']!=$arr['pwds']){
            exit('密码和确认密码不一致');
        }
        $user_info=DB::table('fiction_user')->where(['user_name'=>$arr['name']])->first();
        if(!empty($user_info)){
            exit('该账户已注册可以直接登录');
        }
        $where=[
            'tel'=>$arr['tel'],
            'str'=>$arr['verif']
        ];
        $res_arr=DB::table('fiction_verif')->where($where)->first();
        if(empty($res_arr)){
            exit('验证码有误');
        }
        if(time()-$res_arr->ctime>300){
            exit('验证码超时请从新获取');
        }
        $date=[
            'user_name'=>$arr['name'],
            'user_phone'=>$arr['tel'],
            'user_pwd'=>md5($arr['pwd']),
            'status'=>1,
        ];
        $url="http://api.fictions.com/login_do";
        $str=curlRequest($url,$date);
        echo $str;
    }
    //退出登录
    public function quit(Request $request){
        $request->session()->forget('name');
        $request->session()->forget('id');
        echo "<script>alert('退出成功'); location.href='/'</script>";
    }
    //获取验证码
    public function verif(Request $request){
        $tel=$request->input('tel');
        $str=rand(1000,9999);
        //$request->session()->put('verif',$str);
        $arr=[
            'tel'=>$tel,
            'str'=>$str,
            'ctime'=>time()
        ];
        //dd($arr);
        $res=DB::table('fiction_verif')->insert($arr);
        if($res){
            $a=duuanxin($tel,$str);
            if($a){
                echo 1;
            }else{
                echo '获取失败请重试';
            }
        }else{
            echo '操作失败请重试';
        }
    }
}

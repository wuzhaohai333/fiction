<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ListController extends Controller
{
    //列表页
    public function fictionList(Request $request){
        $id=$request->input('id');
        $where=[
            'book_cid'=>$id
        ];
        $data=DB::table('fiction_books')->where($where)->get();
        $name=DB::table('fiction_cart')->where(['c_id'=>$id])->first();
        //print_r($name);
        return view('home.fictionList',['data'=>$data,'name'=>$name]);
    }
    //详情页面
    public function fictionDetails(Request $request){
        $book_id=$request->input('book_id');
        if(empty($book_id)){
            return view('home.fictionDetails');
        }else{
            $where=[
                'book_id'=>$book_id
            ];
            $book_info=DB::table('fiction_section')->where($where)->get();
            //print_r($book_info);
            return view('home.fictionDetails',['data'=>$book_info,'book_id'=>$book_id]);
        }

    }
    //章节内容
    public function section(Request $request){
        $arr=$request->input();
        $where=[
            's_id'=>$arr['s_id']
        ];



        $s_info=DB::table('fiction_section')->where($where)->first();
        $url="http://api.fictions.com/content";
        $res=curlRequest($url,$arr);
        $data=json_decode($res,true);
        $data['data']['c_ctime']=date('Y-m-d H:i:s',$data['data']['c_ctime']);
//        print_r($s_info);$data['data']['c_ctime'];
//        dd($data);
        return view('home.fictionContent',['arr'=>$s_info,'data'=>$data['data']]);
    }
}

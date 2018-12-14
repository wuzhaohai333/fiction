<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\Hint;
use DB;
use QL\QueryList;
class IndexController extends Controller
{
    //推荐小说
    public function isRecommend(){
        $data=DB::table('fiction_books')->join('fiction_cart','fiction_books.book_cid','=','fiction_cart.c_id')->where(['is_recommend'=>1])->get();

        return $this->showMsg(Hint::SUCCESS_CODE,'请求成功',$data);
    }
    //推荐小说
    public function isSift(){
        $data=DB::table('fiction_books')->join('fiction_cart','fiction_books.book_cid','=','fiction_cart.c_id')->where(['is_sift'=>1])->get();

        return $this->showMsg(Hint::SUCCESS_CODE,'请求成功',$data);
    }
    //采集
    public function collect(Request $request){

        $arr=$request->input();

        $url='http://www.17k.com/list'.substr($arr['url'],Strpos($arr['url'],'book')+4);

        $where=[
            'book_id'=>$arr['book_id']
        ];

        $guizhe=[
            'akak'=>array('.Volume:gt(0) .ellipsis','text'),
            //'rezi'=>array('.Volume .ellipsis','text'),
            'url'=>array('.Volume dd a','href'),
        ];
        $jieguo = QueryList::get($url)
            // 设置采集规则
            ->rules($guizhe)
            ->queryData();
        //dd($jieguo);
        $book_info=DB::table('fiction_section')->where($where)->first();
        if(empty($book_info)){
            foreach($jieguo as $k=>$v){
                $arr=[
                    'book_id'=>$arr['book_id'],
                    's_name'=>$v['akak'],
                    's_url'=>$v['url'],
                    's_ctime'=>time(),
                    's_status'=>1,

                ];
                DB::table('fiction_section')->insert($arr);
            }
            echo '由于本站没有原文，您要的文章已采集成功，请刷新页面。';
        }else{
            $book_id=$arr['book_id'];
            return redirect('http://www.fictions.com/details?book_id='.$book_id);
        }
    }
    //文章内容采集
    public function content(Request $request){

    }
}

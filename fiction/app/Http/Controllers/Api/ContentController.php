<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\Hint;
use DB;
use QL\QueryList;
class ContentController extends Controller
{
    //文章内容采集
    public function content(Request $request){
        $arr=$request->input();
        $url='http://www.17k.com/'.$arr['url'];
        $where=[
            'content'=>array('.readAreaBox .p','text'),
        ];
        $db_where=[
            'book_id'=>$arr['book_id'],
            's_id'=>$arr['s_id'],
        ];
        $content_info=DB::table('fiction_content')->where($db_where)->first();
        $data= QueryList::get($url)
            // 设置采集规则
            ->rules($where)
            ->queryData();
        if(empty($content_info)){
            $new_arr=[
                'book_id'=>$arr['book_id'],
                's_id'=>$arr['s_id'],
                'c_ctime'=>time(),
                'c_status'=>1,
                'content'=>$data[0]['content']

            ];
            DB::table('fiction_content')->insert($new_arr);
            return $this->showMsg(Hint::SUCCESS_CODE,'请求成功',$new_arr);
        }else{
            return $this->showMsg(Hint::SUCCESS_CODE,'请求成功',$content_info);
        }
    }
}

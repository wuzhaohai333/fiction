<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use DB;
use QL\QueryList;
class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
    //抓取小说
    public function gain(Content $content){
        $content->row(function(Row $row) {
            $row->column(1, '小说编号');
            $row->column(2, '小说标题');
            $row->column(2, '小说名称');
            $row->column(2, '小说地址');
            $row->column(2, '父级分类');
            $row->column(2, '添加时间');
            $row->column(1, '操作');
        });
        
        $book_info=DB::table('fiction_books')->get();

        if(!empty($book_info)){
            foreach($book_info as $k=>$v){
                $content->row(function(Row $row) {
                    $row->column(1, '小说编号');
                    $row->column(2, '小说标题');
                    $row->column(2, '小说名称');
                    $row->column(2, '小说地址');
                    $row->column(2, '父级分类');
                    $row->column(2, '添加时间');
                    $row->column(1, '操作');
                });
            }
        }else{
            $url="http://www.17k.com/";
            $data = QueryList::get($url)
                // 设置采集规则
                ->rules([
                    'title'=>array('.NS .sign','text'),
                    'bookname'=>array('.NS a[title]','text'),
                    'url'=>array('.NS a[title]','href'),
                    'img'=>array('.NS .book img','src'),
                ])
                ->queryData();
            //dd($data);
            foreach($data as $k=>$v){
                if(isset($v['img'])){
                    $arr=[
                        'book_tilke'=>$v['title'],
                        'book_name'=>$v['bookname'],
                        'book_url'=>$v['url'],
                        'book_img'=>$v['img'],
                        'book_cid'=>rand(1,8),
                        'book_status'=>1,
                        'book_ctime'=>time(),
                    ];
                }else{
                    $arr=[
                        'book_tilke'=>$v['title'],
                        'book_name'=>$v['bookname'],
                        'book_url'=>$v['url'],
                        'book_img'=>$data[1]['img'],
                        'book_cid'=>rand(1,8),
                        'book_status'=>1,
                        'book_ctime'=>time(),
                    ];
                }
                // $arr['book_img']=$v['img'];

                //print_r($arr);
                DB::table('fiction_books')->Insert($arr);
            }
        }




        return $content;
    }

}

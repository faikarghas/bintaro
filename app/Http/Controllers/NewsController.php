<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        $news = DB::table('news')->where('news_lang','1')->orderBy('news_id','DESC')->get();

        $data = [
            'news' => $news
        ];

        return view('web.news.index',$data);
    }

    public function detail($slug){
        $news = DB::table('news')->where('news_lang','1')->orderBy('news_id','DESC')->get();
        $newsDetail = DB::table('news')->where('news_slug',$slug)->get();

        $data = [
            'news' => $news,
            'newsDetail' => $newsDetail
        ];

        // dd($newsDetail);

        return view('web.news.detail',$data);
    }

}

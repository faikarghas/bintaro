<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index(){
        $news = DB::table('news')->where('news_lang','1')->orderBy('news_id','DESC')->limit(8)->get();

        $data = [
            'news' => $news
        ];

        return view('web.about.index',$data);
    }

    public function living(){
        $news = DB::table('news')->where('news_lang','1')->orderBy('news_id','DESC')->limit(8)->get();

        $data = [
            'news' => $news
        ];

        return view('web.about.living',$data);
    }

}

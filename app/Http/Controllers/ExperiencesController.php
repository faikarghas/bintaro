<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExperiencesController extends Controller
{
    public function index(){
        $news = DB::table('news')->where('news_lang','1')->orderBy('news_id','DESC')->limit(8)->get();
        $experiences = DB::table('experiences_category')->orderBy('order','ASC')->get();

        $data = [
            'news' => $news,
            'experiences_category' => $experiences
        ];

        return view('web.experiences.index',$data);
    }

    public function detail($slug){
        $news = DB::table('news')->where('news_lang','1')->orderBy('news_id','DESC')->limit(8)->get();
        $experiences = DB::table('experiences_detail')
            ->join('experiences_category', 'experiences_detail.category', '=', 'experiences_category.id')
            ->select('experiences_detail.id as id','experiences_category.name as category_name', 'experiences_category.description as category_desc', 'title','experiences_detail.description as detail_desc','slug','experiences_detail.image as img_detail')
            ->where('slug',$slug)
            ->get();

        $banner = DB::table('experiences_category')->where('slug',$slug)->get();
        $experiences_category = DB::table('experiences_category')->get();
        $next_id = DB::table('experiences_category')->where('slug',$slug)->get();

        $data = [
            'news' => $news,
            'experiences' => $experiences,
            'banner' => $banner,
            'experiences_category' => $experiences_category,
            'next_id' => $next_id
        ];

        return view('web.experiences.detail',$data);
    }

}

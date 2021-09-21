<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $news = DB::table('news')->where('news_lang','1')->orderBy('news_id','DESC')->limit(8)->get();

        $data = [
            'news' => $news
        ];

        return view('web.contact.index',$data);
    }

    public function postContact(Request $request){
        $request->validate([
            'perihal' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ]);

        $data = [
            'perihal' => $request->input('perihal'),
            'nama_depan' => $request->input('nama_depan'),
            'nama_belakang' => $request->input('nama_belakang'),
            'email' => $request->input('email'),
            'pesan' => $request->input('pesan')
        ];

        // dd($data);

        Contact::create($data);
        return redirect()->back();
    }

}

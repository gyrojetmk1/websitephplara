<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\cachepage;
use App\Models\comments;
use \DB;

class mainpagescontroller extends Controller
{
    public function home()
    {
        $post = DB::select('SELECT * FROM posts ORDER BY ID DESC LIMIT 1');
        $comments = DB::select('SELECT * FROM comments ORDER BY ID');
        

        return view('main/home', [
            'main/home' => cachepage::cache('main/home')
        ],[
            'id'=>$post[0]->id,
            'footer'=>$post[0]->footer,
            'content'=>$post[0]->content,
            'comments'=>comments::getcmtswithid($post[0]->id)
        ]);
    }

    public function tests()
    {
        return view('main/test', ['main/test' => cachepage::cache('main/test')]);
    }
}

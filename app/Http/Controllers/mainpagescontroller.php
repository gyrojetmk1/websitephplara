<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\cachepage;
use \DB;

class mainpagescontroller extends Controller
{
    public function home()
    {
        $post = DB::select('SELECT * FROM posts ORDER BY ID DESC LIMIT 1');

        return view('main/home', [
            'main/home' => cachepage::cache('main/home')
        ],[
            'footer'=>$post[0]->footer,
            'content'=>$post[0]->content
        ]);
    }

    public function tests()
    {
        return view('main/test', ['main/test' => cachepage::cache('main/test')]);
    }
}

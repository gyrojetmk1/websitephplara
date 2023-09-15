<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cachepage;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use \DB;

class uploadcontroller extends Controller
{
    public function uploadpg()
    {
        return view('admin/upload', ['admin/upload' => cachepage::cache('admin/upload')]);
    }

    public function delete()
    {

        $attributes = request()->validate([
            'id' => 'required'
        ]);


        DB::delete('delete from posts where id = ?', [$attributes['id']]);

        return redirect('/admin/delete')->with('info', 'Post successfully deleted.');
    }

    public function deletepg() // definitely boilerplate code, have to fix
    {
        $posts = DB::select('SELECT * FROM posts');
        return view('admin/delete', ['admin/delete' => cachepage::cache('admin/delete')])->with('posts', $posts);
    }

    public function upload()
    {   
        $attributes = request()->validate([
            'content' => 'required',
            'footer' => ''
        ]);

        post::create($attributes);

        return redirect('/')->with('info', 'Post successfully created.');
    }
}

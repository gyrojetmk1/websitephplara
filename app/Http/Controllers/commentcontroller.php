<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;


class commentcontroller extends Controller
{
    public function postcomment()
    {   
        $attributes = request()->validate([
            'comment' => 'required',
            'postid' => 'required'
        ]);

        $attributes['userid'] = auth()->user()->id;
        $attributes['username'] = auth()->user()->username;

        comments::create($attributes);

        return redirect('/')->with(
            'info',
            'Successfully posted comment'
        );
    }

    public function deletecomment() 
    {
        $attributes = request()->validate([
            'cmtid' => 'required',
        ]);

        $comment = comments::find($attributes['cmtid']);
        $user = auth()->user();

        if ($comment->userid == $user->id || $user->admin)
        {
            $comment->delete();

            return redirect('/')->with(
                'info',
                'Comment successfully deleted.'
            );

        } else {
            return redirect('/')->with(
                'info',
                'You do not have premission to preform this action.'
            );
        }
    }
}

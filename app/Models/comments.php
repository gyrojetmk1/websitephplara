<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DB;


class comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'postid',
        'username',
        'comment'
    ];

    public function getuser()
    {
        $user = DB::select('SELECT * FROM users where id = ?', [$this->userid]);
        return $user[0];
    }

    public static function getcmtswithid($id) 
    { 
        $cmts = array();

        $comments = DB::select('SELECT * FROM comments ORDER BY ID');

        foreach ($comments as $comment) 
        {
            if ($id == $comment->postid) 
            {
                array_push($cmts, $comment);
            }
        }

        return $cmts;
    }
}

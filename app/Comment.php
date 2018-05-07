<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
     protected $fillable=[
    	'body',
    	'url',
    	'commentable_id',
    	'comment_type',
    	'user_id',

    ];
}

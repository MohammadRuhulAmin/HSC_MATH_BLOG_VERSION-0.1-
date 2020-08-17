<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Register;
use App\Comment;
use App\Reply;
class Post extends Model
{
    public function register(){
        return $this->belongsTo(Register::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }


}

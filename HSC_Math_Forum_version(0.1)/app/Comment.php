<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Comment extends Model
{
    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function replies(){
        return $this->hasMany(Reply::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Reply extends Model
{
    public function post(){
        return $this->belongsTo(Reply::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Register extends Model
{
   public function posts(){
       return $this->hasMany(Post::class);
   }
}

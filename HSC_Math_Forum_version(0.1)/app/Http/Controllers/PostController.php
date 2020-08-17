<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Register;
class PostController extends Controller
{
    public function savePost(Request $req){
        $post = new Post;
        $post->whichPaper =$req->whichPaper;
        $post->problemDescription = $req->problemDescription;
        $post->register_id = $req->register_id;
        $post->chapterName = $req->chapterName;
        $post->save();
        return "Post saved Successfully!";
    }
    public function viewPost($id){
        $register = Register::find($id);
        $userPost = $register->posts;
        return view('User.viewPost',compact('userPost'));
    }
    public function allPostList(){
        $post = Post::all();
        return view('commonPlatform.allUserPost',compact('post'));
    }
}

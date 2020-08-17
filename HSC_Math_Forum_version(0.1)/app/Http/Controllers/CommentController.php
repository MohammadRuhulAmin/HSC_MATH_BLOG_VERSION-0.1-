<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\Reply;
class CommentController extends Controller
{
    public function saveComment(Request  $request,$id){
        $comment = new Comment;
        $comment->post_solution = $request->post_solution;
        $comment->post_id = $id;
        $comment->save();
        return "Comment is Saved Successfully !";
    }
    public function viewSolution($id){

        $post = Post::find($id);
        $solution = $post->comments;
        return view('User.viewSolution',compact('solution'));
    }
}

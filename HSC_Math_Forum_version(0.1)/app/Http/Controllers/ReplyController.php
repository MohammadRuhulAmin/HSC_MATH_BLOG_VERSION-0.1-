<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use App\Post;
use App\Comment;
class ReplyController extends Controller
{
    public function insertReply(Request  $request,$id){
        $reply = new Reply;
        $reply->replyDescription = $request->comment_reply;
        $reply->comment_id = $id;
        $reply->save();
        return "Reply Is Saved Successfully!";

    }
    public function viewReply($id){
        $comment = Comment::find($id);
        $replyList =  $comment->replies;
        return view('User.replyPage',compact('replyList'));
    }
}

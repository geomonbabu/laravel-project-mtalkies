<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Session;
use App\Models\comment;

class CommentController extends Controller
{
    public function addcomment(Request $request)
    {

        $request->validate([
            'comment' => 'required',
        ]);
        // try {
        $post_id = $request->post_id;
        $user_comment = $request->comment;

        $comment = new comment();
        $comment->user_id = Session::get('loginId');
        $comment->post_id = $post_id;
        $comment->values = $user_comment;
        if ($comment->save()) {
            Session::flash('success', 'Comment added successfully');
            return redirect()->back();
        } else {
            Session::flash('error', 'Comment not added');
            return redirect()->back();
        }
        // } catch (\Exception $e) {
        //     dd($e);
        // }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function displayComments() {
        $comments = DB::select('select * from CommentTbl');
        return view('welcome',['comments'=>$comments]);
    }

    public function writeComment(Request $request) {
        $comment = $request->input('comment');
        $commentImage = $request->file('comment-image')->openFile;

        DB::insert('INSERT INTO CommentTbl (CommentText, Image) values(?,?)',["$comment", $commentImage]);
        return redirect('/');
    }

    public function deleteComment($cmtId){
        if(\Auth::check()) {
            DB::delete('delete from CommentTbl where CommentId = ?',[$cmtId]);
            return redirect('/');
        } 

        return redirect('/login');
    }
}

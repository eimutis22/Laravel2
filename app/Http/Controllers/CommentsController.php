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

        DB::insert('INSERT INTO CommentTbl (CommentText) values(?)',["$comment"]);

        return "Comment submitted!<br><a href='/'>Go home</a>";
        // return redirect()->route('welcome'); // Route not defined
    }

    public function deleteComment($cmtId){
        DB::delete('delete from CommentTbl where CommentId = ?',[$cmtId]);
        echo "Record deleted successfully.<br/>";

        $comments = DB::select('select * from CommentTbl');
        return view('welcome',['comments'=>$comments]);
        
    // echo '<a href="/delete-records">Click Here</a> to go back.';
    }
}

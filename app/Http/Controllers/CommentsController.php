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
}

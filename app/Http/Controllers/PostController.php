<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
     $id = 3; 
    $posts = DB::table ('posts')
            ->orderBy('created_at', 'desc')
            ->first();
    dd($posts);
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
     $id = 5; 
    $posts = DB::table ('posts')
            ->where('id', '=', 5)
            ->update([
                'title' => 'New title', 'body' =>'Updated body'
            ]);
            
    dd($posts);
   }
}

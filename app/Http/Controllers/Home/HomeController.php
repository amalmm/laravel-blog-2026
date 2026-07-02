<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
     public function index (){
        $post= Blog::get();
        return view('home.index')
        ->with('post',$post);
     }
}

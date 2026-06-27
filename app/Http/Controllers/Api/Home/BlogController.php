<?php

namespace App\Http\Controllers\Api\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function blog(){
        
        $data = Blog::latest()->paginate(5);
         return response()->json($data,200);

    }
}

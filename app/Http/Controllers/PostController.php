<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
    
 public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
}
?>

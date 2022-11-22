<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
}
use App\Models\Post;

public function index(Post $post){
    return $post->get();
}
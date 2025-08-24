<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index () {
        $posts = Post::simplePaginate();
        // Laravel teeb automaatselt viewile kättesaadavaks muutuja nimega $posts, page1 page2 on erinevad sisud ,postid
        return view('index', compact('posts'));
}
    public function about () {
        return view('about');
    }
}

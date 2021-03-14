<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
class BlogController extends Controller
{
    public function index() {
        $blog = Post::all();
        return view('blog.index') -> with(['post' => $blog]);
    }
    public function store(Request $reguest) {
        Post::create ([
            'title' => $reguest->title,
            'body'=>$reguest->body
        ]);
        return back();
    }
}

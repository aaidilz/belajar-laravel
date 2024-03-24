<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.main-post', [
            'post_title' => 'Main Post',
            'post_body' => 'This is the main post content.',
        ]);
    }
}

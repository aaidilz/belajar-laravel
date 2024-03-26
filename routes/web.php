<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get(('/about'), function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Rimuru Tempest',
        'email' => 'Rimuru@gmail.com'
    ]);
});

Route::get(('/posts'), function () {
    $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Rimuru Tempest',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Shizue Izawa',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.'
        ],
    ];
    return view('/posts', [
        'title' => 'Posts',
        'posts' => $blog_post
    ]);
});

Route::get('posts/{slug}', function($slug) {
    $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Rimuru Tempest',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Shizue Izawa',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.'
        ],
    ];


    $new_post = [];
    foreach($blog_post as $post) {
        if($post['slug'] === $slug) {
            $new_post = $post;
        }   
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
}); 

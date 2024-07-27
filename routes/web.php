<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["heading" => "Home", "posts" => Post::all()]);
});

Route::get('/post/{id}', function ($id) {
    return view('post', ["heading" => "Create a post", 'post' => Post::find($id)]);
});



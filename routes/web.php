<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();
    return view('home', ["heading" => "Home", "posts" => $posts]);
});

Route::get('/post/{id}', function ($id) {
    $users = User::with('posts', 'comments')->find($id);
    return view('post', ["heading" => "Create a post", 'user' => $users]);
});



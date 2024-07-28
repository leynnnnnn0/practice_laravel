<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();
    return view('home', ["heading" => "Home", "posts" => $posts]);
});

Route::get('/post/{id}', function ($id) {
    $users = User::with('posts', 'comments')->find($id);
    return view('post', ["heading" => "Create a post", 'user' => $users]);
});


// store
Route::post('/post/{postId}/comment/{userId}', function ($postId, $userId) {
    // Validate input
    request()->validate([
        'body' => 'required'
    ]);
    // create new comment associated with the post id
    Comment::create([
        'user_id' => '6',
        'post_id' => $postId,
        'body' => request('body')
    ]);
    return redirect('/post/' . $userId);
});



<?php



use Illuminate\Support\Facades\Route;

// Routes for the pages
Route::get('/signin', function () {
    return view('signin');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/{id}', function ($id) {
    return view('blog_post', ['id' => $id]);
});

Route::get('/profile', function () {
    return view('profile');
});

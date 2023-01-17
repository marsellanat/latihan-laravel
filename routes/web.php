<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Marsella",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi pariatur dolorum itaque minima blanditiis sit, error ea, obcaecati assumenda nemo sunt laborum numquam quidem libero quos eos voluptates possimus, temporibus ullam aut praesentium sequi expedita! Earum dolore deserunt voluptates quo, impedit cum sunt eum debitis rerum deleniti est nostrum omnis maiores dolores obcaecati et eaque neque iste non fugiat facere dolorem ea voluptatum! Fuga fugit repellat minima nesciunt natus aut cum unde molestiae mollitia, cupiditate officiis ipsam, magni placeat saepe."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Sella",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi pariatur dolorum itaque minima blanditiis sit, error ea, obcaecati assumenda nemo sunt laborum numquam quidem libero quos eos voluptates possimus, temporibus ullam aut praesentium sequi expedita! Earum dolore deserunt voluptates quo, impedit cum sunt eum debitis rerum deleniti est nostrum omnis maiores dolores obcaecati et eaque neque iste non fugiat facere dolorem ea voluptatum! Fuga fugit repellat minima nesciunt natus aut cum unde molestiae mollitia, cupiditate officiis ipsam, magni placeat saepe."
        ],
        ];
        
    return view('posts', [
        "title" => "Posts",
        "post" => $blog_posts
    ]);
});


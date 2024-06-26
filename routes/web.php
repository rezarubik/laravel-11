<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Home Page';
    return view('home', ['title' => $title]);
});

Route::get('/posts', function () {
    $title = 'Posts';
    return view('posts', ['title' => $title, 'title' => $title, 'posts' => Post::all()]);
});

Route::get('/posts/v1', function () {
    $title = 'Posts';
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-article-1',
            'title' => 'Judul Article 1',
            'author' => 'Muhammad Reza Pahlevi Y',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quod eius eum delectus velit perferendis, quas totam. Libero optio voluptatum neque debitis pariatur, laudantium aliquam praesentium. Laboriosam magnam quos perspiciatis.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-article-2',
            'title' => 'Judul Article 2',
            'author' => 'Nadiah Tsamara Pratiwi',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur repudiandae, rem nemo suscipit eligendi et. Corrupti nulla ullam explicabo soluta quo aut consequatur saepe quia ad! Sed repellendus aspernatur accusantium.'
        ],
    ];
    return view('posts', ['title' => $title, 'title' => $title, 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // 
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/posts/{slug}/oldversion', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-article-1',
            'title' => 'Judul Article 1',
            'author' => 'Muhammad Reza Pahlevi Y',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quod eius eum delectus velit perferendis, quas totam. Libero optio voluptatum neque debitis pariatur, laudantium aliquam praesentium. Laboriosam magnam quos perspiciatis.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-article-2',
            'title' => 'Judul Article 2',
            'author' => 'Nadiah Tsamara Pratiwi',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur repudiandae, rem nemo suscipit eligendi et. Corrupti nulla ullam explicabo soluta quo aut consequatur saepe quia ad! Sed repellendus aspernatur accusantium.'
        ],
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    // todo: Jika menggunakan arrow function
    // $post = Arr::first($posts, fn ($post) => $post['slug'] == $slug);
    if (!$post) {
        abort(404);
    }

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    $title = 'Blog';
    $name = 'Muhammad Reza Pahlevi Y';
    return view('about', ['title' => $title, 'name' => $name]);
});

Route::get('/contact', function () {
    $title = 'Contact';
    return view('contact', ['title' => $title]);
});

Route::get('home', function () {
    return 'This is home routes';
});

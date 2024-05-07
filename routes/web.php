<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id'    => 1,
            'slug'  => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Nadhir Barabud',
            'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, veritatis nostrum. Sint temporibus dicta blanditiis iusto, excepturi velit minus delectus dolorem! Fuga pariatur quae voluptatem recusandae. Aperiam distinctio adipisci delectus!'
        ], [
            'id'    => 2,
            'slug'  => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Nadhir Barabud',
            'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet fugit autem enim quia debitis. Distinctio in quas quam magnam corporis ea commodi amet iure, dolores laboriosam accusantium repellendus fugit? Distinctio'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id'    => 1,
            'slug'  => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Nadhir Barabud',
            'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, veritatis nostrum. Sint temporibus dicta blanditiis iusto, excepturi velit minus delectus dolorem! Fuga pariatur quae voluptatem recusandae. Aperiam distinctio adipisci delectus!'
        ], [
            'id'    => 2,
            'slug'  => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Nadhir Barabud',
            'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet fugit autem enim quia debitis. Distinctio in quas quam magnam corporis ea commodi amet iure, dolores laboriosam accusantium repellendus fugit? Distinctio'
        ]
    ];
    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });
    
    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

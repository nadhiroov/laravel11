<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [[
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
        ]];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}

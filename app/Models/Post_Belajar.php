<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizal Prabaswara",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Voluptatibus, sequi. Iste velit et neque dignissimos doloremque nobis autem
            maxime cum vitae in architecto quia vel aut, error magnam ea optio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Surya Indahsari",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Distinctio deserunt totam perspiciatis nisi eos quasi dolorum laborum modi vel laboriosam,
            quod cupiditate dolores, facere at expedita odit placeat ipsum iusto quis unde velit
            minus amet alias. Aspernatur sequi est omnis cupiditate ratione dolore porro neque,
            vel similique quos voluptates aliquam debitis esse distinctio, eos labore laudantium.
            Vel autem nostrum omnis ducimus sed error animi repellat quasi magni tempora.
            Est omnis facere neque quod aperiam rerum quos repudiandae totam laborum quo?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

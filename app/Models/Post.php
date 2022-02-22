<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title"        => "Judul pertama",
            "slug"        => "judul-pertama",
            "author"    => "Sahruil Mahani",
            "body"        => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi consequuntur nulla assumenda, quia dolor nobis quos itaque quod ex, vel fuga? Incidunt, nostrum laboriosam cupiditate alias eligendi vero quod illum voluptates. Illo ex quas veniam blanditiis quidem non reprehenderit impedit consectetur, voluptate exercitationem recusandae. Cum provident harum labore voluptatum veniam dignissimos possimus aliquid. Iusto quia laborum aut commodi non itaque facere? Expedita ratione numquam ab adipisci nostrum dignissimos est nemo cumque consequatur nisi autem quidem vel dolorem amet, praesentium minima atque reprehenderit placeat, aut quos reiciendis enim. Ex eius sapiente numquam laudantium incidunt quod corrupti delectus neque tempora alias! Perspiciatis?"
        ],
        [
            "title"        => "Judul kedua",
            "slug"        => "judul-kedua",
            "author"    => "Mega Ryu",
            "body"        => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam explicabo itaque, voluptates odit quaerat illo ullam ut distinctio ipsam cumque velit in accusamus architecto quasi rerum, sed maiores adipisci dolore laborum deleniti eligendi voluptas tempore illum. Numquam id repellat voluptates, necessitatibus explicabo, mollitia et nesciunt natus, temporibus quidem ea perferendis!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

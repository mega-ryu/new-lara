<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'      => "Sahrul Mahani",
            'email'     => "sahrul@gmail.com",
            'password'  => bcrypt('123456')
        ]);

        User::create([
            'name'      => "Maman Pauweni",
            'email'     => "maman@gmail.com",
            'password'  => bcrypt('123456')
        ]);

        Category::create([
            'name'  => "Web Programming",
            'slug'  => "web-programming"
        ]);

        Category::create([
            'name'  => "Personal",
            'slug'  => "personal"
        ]);

        Post::create([
            'title'     => "Judul Pertama",
            'slug'      => "judul-pertama",
            'excerpt'   => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam distinctio",
            'body'      => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam distinctio itaque dolorem quam omnis maiores nisi? Quisquam, voluptates. Deserunt illo officia in fugit unde quisquam aspernatur sit a? Facilis asperiores dicta perferendis doloribus consequatur, aut quibusdam delectus consectetur dolores dolorum molestiae soluta, pariatur alias ea ab. Illo adipisci suscipit dicta dolores autem nihil aspernatur explicabo labore ad aliquid quisquam, nostrum voluptatum. Cum exercitationem sequi maxime, delectus doloribus ratione aliquid. Placeat assumenda voluptatum laudantium asperiores consectetur dolorem non doloremque vero quod perferendis veritatis omnis, nostrum est exercitationem! Fuga at vel ipsa, optio laudantium veritatis quisquam voluptates nulla molestias aut non repellendus?",
            'category_id'   => 1,
            'user_id'       => 2
        ]);

        Post::create([
            'title'     => "Judul Kedua",
            'slug'      => "judul-kedua",
            'excerpt'   => "Lorem ipsum kedua dolor, sit amet consectetur adipisicing elit. Quisquam distinctio",
            'body'      => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam distinctio itaque dolorem quam omnis maiores nisi? Quisquam, voluptates. Deserunt illo officia in fugit unde quisquam aspernatur sit a? Facilis asperiores dicta perferendis doloribus consequatur, aut quibusdam delectus consectetur dolores dolorum molestiae soluta, pariatur alias ea ab. Illo adipisci suscipit dicta dolores autem nihil aspernatur explicabo labore ad aliquid quisquam, nostrum voluptatum. Cum exercitationem sequi maxime, delectus doloribus ratione aliquid. Placeat assumenda voluptatum laudantium asperiores consectetur dolorem non doloremque vero quod perferendis veritatis omnis, nostrum est exercitationem! Fuga at vel ipsa, optio laudantium veritatis quisquam voluptates nulla molestias aut non repellendus?",
            'category_id'   => 1,
            'user_id'       => 1
        ]);

        Post::create([
            'title'     => "Judul Ketiga",
            'slug'      => "judul-ketiga",
            'excerpt'   => "Lorem ipsum ketiga dolor, sit amet consectetur adipisicing elit. Quisquam distinctio",
            'body'      => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam distinctio itaque dolorem quam omnis maiores nisi? Quisquam, voluptates. Deserunt illo officia in fugit unde quisquam aspernatur sit a? Facilis asperiores dicta perferendis doloribus consequatur, aut quibusdam delectus consectetur dolores dolorum molestiae soluta, pariatur alias ea ab. Illo adipisci suscipit dicta dolores autem nihil aspernatur explicabo labore ad aliquid quisquam, nostrum voluptatum. Cum exercitationem sequi maxime, delectus doloribus ratione aliquid. Placeat assumenda voluptatum laudantium asperiores consectetur dolorem non doloremque vero quod perferendis veritatis omnis, nostrum est exercitationem! Fuga at vel ipsa, optio laudantium veritatis quisquam voluptates nulla molestias aut non repellendus?",
            'category_id'   => 2,
            'user_id'       => 1
        ]);

        Post::create([
            'title'     => "Judul Keempat",
            'slug'      => "judul-keempat",
            'excerpt'   => "Lorem ipsum keempat dolor, sit amet consectetur adipisicing elit. Quisquam distinctio",
            'body'      => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam distinctio itaque dolorem quam omnis maiores nisi? Quisquam, voluptates. Deserunt illo officia in fugit unde quisquam aspernatur sit a? Facilis asperiores dicta perferendis doloribus consequatur, aut quibusdam delectus consectetur dolores dolorum molestiae soluta, pariatur alias ea ab. Illo adipisci suscipit dicta dolores autem nihil aspernatur explicabo labore ad aliquid quisquam, nostrum voluptatum. Cum exercitationem sequi maxime, delectus doloribus ratione aliquid. Placeat assumenda voluptatum laudantium asperiores consectetur dolorem non doloremque vero quod perferendis veritatis omnis, nostrum est exercitationem! Fuga at vel ipsa, optio laudantium veritatis quisquam voluptates nulla molestias aut non repellendus?",
            'category_id'   => 1,
            'user_id'       => 2
        ]);
    }
}

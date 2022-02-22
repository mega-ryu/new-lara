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
	return view('home', [
		'title'	=> "home"
	]);
});

Route::get('/about', function () {
	return view('about', [
		'title'	=> "about",
		'nama' 	=> "Sahrul Mahani",
		'nim'		=> "21515028",
		'image'	=> "https://www.kindpng.com/picc/m/24-248729_stockvader-predicted-adig-user-profile-image-png-transparent.png"
	]);
});

Route::get('/blog', function () {
	$blog_post = [
		[
			"title"		=> "Judul pertama",
			"slug"		=> "judul-pertama",
			"author"	=> "Sahruil Mahani",
			"body"		=> "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi consequuntur nulla assumenda, quia dolor nobis quos itaque quod ex, vel fuga? Incidunt, nostrum laboriosam cupiditate alias eligendi vero quod illum voluptates. Illo ex quas veniam blanditiis quidem non reprehenderit impedit consectetur, voluptate exercitationem recusandae. Cum provident harum labore voluptatum veniam dignissimos possimus aliquid. Iusto quia laborum aut commodi non itaque facere? Expedita ratione numquam ab adipisci nostrum dignissimos est nemo cumque consequatur nisi autem quidem vel dolorem amet, praesentium minima atque reprehenderit placeat, aut quos reiciendis enim. Ex eius sapiente numquam laudantium incidunt quod corrupti delectus neque tempora alias! Perspiciatis?"
		],
		[
			"title"		=> "Judul kedua",
			"slug"		=> "judul-kedua",
			"author"	=> "Mega Ryu",
			"body"		=> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam explicabo itaque, voluptates odit quaerat illo ullam ut distinctio ipsam cumque velit in accusamus architecto quasi rerum, sed maiores adipisci dolore laborum deleniti eligendi voluptas tempore illum. Numquam id repellat voluptates, necessitatibus explicabo, mollitia et nesciunt natus, temporibus quidem ea perferendis!"
		]
	];

	return view('posts', [
		'title'	=> "posts",
		"posts"	=> $blog_post
	]);
});

Route::get("/posts/{slug}", function($slug) {
	$blog_post = [
		[
			"title"		=> "Judul pertama",
			"slug"		=> "judul-pertama",
			"author"	=> "Sahruil Mahani",
			"body"		=> "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi consequuntur nulla assumenda, quia dolor nobis quos itaque quod ex, vel fuga? Incidunt, nostrum laboriosam cupiditate alias eligendi vero quod illum voluptates. Illo ex quas veniam blanditiis quidem non reprehenderit impedit consectetur, voluptate exercitationem recusandae. Cum provident harum labore voluptatum veniam dignissimos possimus aliquid. Iusto quia laborum aut commodi non itaque facere? Expedita ratione numquam ab adipisci nostrum dignissimos est nemo cumque consequatur nisi autem quidem vel dolorem amet, praesentium minima atque reprehenderit placeat, aut quos reiciendis enim. Ex eius sapiente numquam laudantium incidunt quod corrupti delectus neque tempora alias! Perspiciatis?"
		],
		[
			"title"		=> "Judul kedua",
			"slug"		=> "judul-kedua",
			"author"	=> "Mega Ryu",
			"body"		=> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam explicabo itaque, voluptates odit quaerat illo ullam ut distinctio ipsam cumque velit in accusamus architecto quasi rerum, sed maiores adipisci dolore laborum deleniti eligendi voluptas tempore illum. Numquam id repellat voluptates, necessitatibus explicabo, mollitia et nesciunt natus, temporibus quidem ea perferendis!"
		]
	];

	$new_post = [];
	foreach($blog_post as $post) {
		if ($post['slug'] === $slug) {
			$new_post = $post;
		}
	}

	return view('post', [
		"title"	=> "Single Post",
		"post"	=> $new_post
	]);
});
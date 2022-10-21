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
    return view ('Home', [ 
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('About', [
        "title" => "About",
        "name" => "Qisti Izatussyabani",
        "email" => "qistiizatussyabani8910@gmail.com",
        "image" => "qisti.jpg",
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Qisti Izatussyabani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio error dignissimos ut sapiente non? Rem odio, sapiente tempora sed quaerat aspernatur? Asperiores, deserunt aliquam sunt obcaecati, veritatis quos dolore inventore rerum minima cumque cum. Vitae a nesciunt accusantium magni aliquam necessitatibus soluta? Hic laboriosam ab consectetur corporis corrupti mollitia asperiores neque quos dignissimos, odit dolorem suscipit ipsa unde animi excepturi autem totam adipisci! Reprehenderit veritatis possimus omnis quasi necessitatibus atque temporibus ratione adipisci, excepturi officiis facere nostrum blanditiis natus ad."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Berliana Putri",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem incidunt accusantium debitis distinctio, repellat praesentium sed, reprehenderit, maiores ab ullam saepe similique. Iusto totam explicabo dolor ducimus exercitationem, eaque fugiat placeat maiores animi voluptatum rem ab doloremque aliquam porro hic voluptas minima doloribus nisi soluta nulla. Nemo laborum similique molestiae nostrum ab placeat sed sequi tempora, eos, atque officiis corrupti minus modi vel voluptas qui quasi, a esse aut corporis incidunt quam rerum voluptate. Architecto delectus, perferendis odio voluptas voluptates repellendus amet eaque doloremque nulla laboriosam, tempore perspiciatis doloribus hic? Error numquam eum veniam hic illo quidem qui dolor quo!"
        ],
    ];
    
    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//Halaman single post

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Qisti Izatussyabani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio error dignissimos ut sapiente non? Rem odio, sapiente tempora sed quaerat aspernatur? Asperiores, deserunt aliquam sunt obcaecati, veritatis quos dolore inventore rerum minima cumque cum. Vitae a nesciunt accusantium magni aliquam necessitatibus soluta? Hic laboriosam ab consectetur corporis corrupti mollitia asperiores neque quos dignissimos, odit dolorem suscipit ipsa unde animi excepturi autem totam adipisci! Reprehenderit veritatis possimus omnis quasi necessitatibus atque temporibus ratione adipisci, excepturi officiis facere nostrum blanditiis natus ad."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Berliana Putri",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem incidunt accusantium debitis distinctio, repellat praesentium sed, reprehenderit, maiores ab ullam saepe similique. Iusto totam explicabo dolor ducimus exercitationem, eaque fugiat placeat maiores animi voluptatum rem ab doloremque aliquam porro hic voluptas minima doloribus nisi soluta nulla. Nemo laborum similique molestiae nostrum ab placeat sed sequi tempora, eos, atque officiis corrupti minus modi vel voluptas qui quasi, a esse aut corporis incidunt quam rerum voluptate. Architecto delectus, perferendis odio voluptas voluptates repellendus amet eaque doloremque nulla laboriosam, tempore perspiciatis doloribus hic? Error numquam eum veniam hic illo quidem qui dolor quo!"
        ],
    ];


    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio error dignissimos ut sapiente non? Rem odio, sapiente tempora sed quaerat aspernatur? Asperiores, deserunt aliquam sunt obcaecati, veritatis quos dolore inventore rerum minima cumque cum. Vitae a nesciunt accusantium magni aliquam necessitatibus soluta? Hic laboriosam ab consectetur corporis corrupti mollitia asperiores neque quos dignissimos, odit dolorem suscipit ipsa unde animi excepturi autem totam adipisci! Reprehenderit veritatis possimus omnis quasi necessitatibus atque temporibus ratione adipisci, excepturi officiis facere nostrum blanditiis natus ad."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem incidunt accusantium debitis distinctio, repellat praesentium sed, reprehenderit, maiores ab ullam saepe similique. Iusto totam explicabo dolor ducimus exercitationem, eaque fugiat placeat maiores animi voluptatum rem ab doloremque aliquam porro hic voluptas minima doloribus nisi soluta nulla. Nemo laborum similique molestiae nostrum ab placeat sed sequi tempora, eos, atque officiis corrupti minus modi vel voluptas qui quasi, a esse aut corporis incidunt quam rerum voluptate. Architecto delectus, perferendis odio voluptas voluptates repellendus amet eaque doloremque nulla laboriosam, tempore perspiciatis doloribus hic? Error numquam eum veniam hic illo quidem qui dolor quo!"
        ],
    ];


    public static function all ()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }


}





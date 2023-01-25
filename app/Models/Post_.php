<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Cara Menjadi Cool",
            "slug" => "post-1",
            "author" => "Muhammad Sasa",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, magnam error. Dignissimos, delectus commodi? Totam, doloremque? Modi ducimus officia rem fugiat error dolorem amet nesciunt corporis soluta facere nobis obcaecati perferendis, temporibus blanditiis! Natus deserunt assumenda delectus consequuntur, totam fugiat distinctio vitae cupiditate maxime necessitatibus ipsa dolor repellendus temporibus iusto nihil omnis perspiciatis dignissimos ratione odio deleniti, accusantium provident commodi.</p><p>Consequuntur itaque tenetur quod qui! Tempore odit nemo nostrum, enim eligendi similique exercitationem cupiditate placeat voluptatem expedita eum excepturi in.</p>"
        ],
        [
            "title" => "Cara Beli Aerox",
            "slug" => "post-2",
            "author" => "Sasa Ajah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, magnam error. Dignissimos, delectus commodi? Totam, doloremque? Modi ducimus officia rem fugiat error dolorem amet nesciunt corporis soluta facere nobis obcaecati perferendis, temporibus blanditiis! Natus deserunt assumenda delectus consequuntur, totam fugiat distinctio vitae cupiditate maxime necessitatibus ipsa dolor repellendus temporibus iusto nihil omnis perspiciatis dignissimos ratione odio deleniti, accusantium provident commodi. Consequuntur itaque tenetur quod qui! Tempore odit nemo nostrum, enim eligendi similique exercitationem cupiditate placeat voluptatem expedita eum excepturi in."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}

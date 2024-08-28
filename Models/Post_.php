<?php

namespace App\Models;

class Post
{
    private static $blog_posts=[[
        "title" => "Judul Post Pertama",
        "slug"  => "judul-post-pertama",
        "author" => "Amiril",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quos accusamus recusandae ipsum officia architecto, enim reprehenderit et eius repellat odio explicabo excepturi vero doloremque facilis, veniam debitis modi incidunt soluta unde? Facere atque dicta unde voluptatem beatae error deserunt dolorem excepturi numquam reiciendis doloribus sequi aspernatur natus consequuntur quod quidem corporis obcaecati, ex dolores nulla, assumenda sit. Voluptate non est odio nostrum dolorem, officia illum id! Reiciendis a suscipit nihil laborum blanditiis deleniti, numquam nemo earum inventore magni aspernatur provident neque tenetur officia eius ratione doloribus, rem ut eum cum omnis doloremque amet. Porro consectetur sapiente itaque deserunt voluptatem."
    ],[
        "title" => "Judul Post Kedua",
        "slug"  => "judul-post-kedua",
        "author" => "Rusdana",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quia, nihil totam inventore voluptas rem dolorum perspiciatis sequi id similique iure culpa unde adipisci a ad ex, quam fugiat ipsa sunt aut impedit labore voluptates. Ad, rerum quia ullam quam asperiores debitis delectus eius voluptatum numquam ipsum, tempore aliquid autem dolorem possimus ex quasi quas vero. Soluta harum consequuntur doloremque quisquam. Earum vitae odio at blanditiis iusto sunt, magni quas quibusdam labore? Totam iure et hic molestiae veritatis distinctio ut, aut ex illo corporis qui, saepe quod fuga sapiente nihil adipisci, nisi explicabo at. Sapiente beatae, natus officiis eveniet nostrum praesentium ullam quia quo doloremque, harum quisquam nihil autem deserunt necessitatibus quasi. Voluptates quia eius obcaecati sapiente, fugiat aut ea quaerat eos, voluptatem magni repellendus accusantium natus, optio earum voluptate excepturi omnis debitis harum eligendi numquam deserunt! Ab cum eos, amet dicta rem corporis adipisci architecto, quisquam excepturi quod dolor."
    ]
];

    public static function all(){
        return collect(self::$blog_posts);
}

    public static function find($slug){
        $posts = static::all();
        //$posts = self::$blog_posts;
        //$post = [];
    //foreach ( $posts as $p){
    //if  ($p["slug"] == $slug){
        //$post = $p;
    //}
//}
return $posts->firstWhere('slug', $slug);
    }

}

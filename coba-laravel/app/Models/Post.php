<?php  

namespace App\Models;



class Post 
{
  private static $blog_posts =  [ 
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Putri Legiani",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus saepe adipisci reiciendis ea magni?
        Ratione consequatur at ducimus officiis possimus architecto voluptatem, veniam consequuntur id deserunt beatae assumenda modi eius
        iusto quibusdam incidunt soluta odio consectetur! Architecto alias a vel modi consequuntur necessitatibus atque voluptas ducimus sit
        quidem.Repellendus ab nisi tenetur quisquam assumenda dicta consequuntur?
        Veritatis deleniti consequatur odit earum recusandae est natus optio culpa excepturi, beatae illo quidem qui quae et nostrum,
        aliquid possimus eaque fuga enim fugiat."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Rayhan Pramudia",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos ullam asperiores itaque corporis architecto necessitatibus
        repudiandae eaque quod magnam veritatis corrupti est voluptatum reprehenderit maxime, ducimus placeat officiis sapiente
        obcaecati quo inventore illum. Earum non ea odit fugit? Totam cum maxime odio quisquam officiis nobis possimus dolorem ab recusandae?
        Dignissimos asperiores dolor at amet dolorum neque exercitationem eum! Distinctio assumenda et in repellendus, unde aspernatur?
        Quo iure recusandae explicabo fugiat ipsum, adipisci iste cumque debitis! Eaque hic dolor molestiae temporibus maxime impedit porro
        voluptatibus cupiditate modi nisi possimus exercitationem consequatur fugit quibusdam magnam eos eveniet quisquam tempore, accusantium
        dolore laboriosam!"
    ],
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
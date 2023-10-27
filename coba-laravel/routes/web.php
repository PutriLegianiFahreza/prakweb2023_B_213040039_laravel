<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/', function () {
    return view('about', [
        "title" => "About",
        "name" => "Putri Legiani",
        "email" => "putrilegiani234@gmailcom",
        "image" => "Logounpas.jpg"
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('post/{slug}', function($slug){
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as post) {
        if($post["slug"] === $slug) {
            $new_post =$post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
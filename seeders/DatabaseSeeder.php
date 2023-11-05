<?php  
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends DatabaseSeeder
{

    /**
    *seed the aplication's Database
    *
    * @return void 
    */
    public function run()
    {
       // \App\Models\User::factory(10)->create();

       User::create([
        'name' => 'putri legiani',
        'email' => 'putrilegiani234@gmail.com',
        'password' => bcrypt('12345')
       ]);

       User::create([
        'name' => 'Rayhan',
        'email' => 'rayhan234@gmail.com',
        'password' => bcrypt('3456')
       ]);

       Category::create([
        'name' => 'Web Programming',
        'slug' => 'Web Programming'
       ]);

       Category::create([
        'name' => 'Personal',
        'slug' => 'personal'
       ]);

       Post::create([
        'title' => 'judul pertama',
        'slug' => 'judul-pertama',
        'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quo qui ipsa perferendis quaerat nostrum unde cupiditate porro adipisci autem?',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore incidunt ipsa possimus nemo beatae laboriosam inventore quas, ab voluptates cumque, iure tempore repellat accusamus. Hic, aperiam? Expedita beatae adipisci aspernatur.',
        'category_id' => 1,
        'user_id'=> 1
       ]);

       Post::create([
        'title' => 'judul Kedua',
        'slug' => 'judul-Kedua',
        'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quo qui ipsa perferendis quaerat nostrum unde cupiditate porro adipisci autem?',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore incidunt ipsa possimus nemo beatae laboriosam inventore quas, ab voluptates cumque, iure tempore repellat accusamus. Hic, aperiam? Expedita beatae adipisci aspernatur.',
        'category_id' => 1,
        'user_id'=> 1
       ]);

       Post::create([
        'title' => 'judul ketiga',
        'slug' => 'judul-ketiga',
        'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quo qui ipsa perferendis quaerat nostrum unde cupiditate porro adipisci autem?',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore incidunt ipsa possimus nemo beatae laboriosam inventore quas, ab voluptates cumque, iure tempore repellat accusamus. Hic, aperiam? Expedita beatae adipisci aspernatur.',
        'category_id' => 2,
        'user_id'=> 1
       ]);

       Post::create([
        'title' => 'judul keempat',
        'slug' => 'judul-keempat',
        'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quo qui ipsa perferendis quaerat nostrum unde cupiditate porro adipisci autem?',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore incidunt ipsa possimus nemo beatae laboriosam inventore quas, ab voluptates cumque, iure tempore repellat accusamus. Hic, aperiam? Expedita beatae adipisci aspernatur.',
        'category_id' => 2,
        'user_id'=> 2
       ]);

    }
}

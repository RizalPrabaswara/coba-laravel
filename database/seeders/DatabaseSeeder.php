<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
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
        User::create([
            'name' => 'Rizal Prabaswara',
            'username' => 'rizalbaay34',
            'email' => 'rizalbaya34@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Sari Apta',
        //     'email' => 'sariapta@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(35)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab maiores voluptates tempora voluptatem obcaecati beatae est, eum corrupti maxime cumque',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab maiores voluptates tempora voluptatem obcaecati beatae est, eum corrupti maxime cumque quam eveniet dolorum iure praesentium ullam nulla placeat vero eos? Id, inventore, ullam ut delectus aliquam tempora unde culpa similique quisquam, quia vitae dolorum eos et quasi quod dolorem pariatur iusto provident rerum!</p> <p>Ipsa porro eveniet molestias! Necessitatibus sunt nobis consequatur obcaecati enim in ex possimus nihil repellendus, repellat adipisci officiis soluta voluptatum? Rerum facere velit omnis molestiae! Neque, molestias. Eum unde soluta totam hic obcaecati natus delectus iste, illum accusamus nam.</p> <p>Dicta assumenda voluptatibus ad itaque sapiente sunt ipsum non eveniet earum voluptatum, cum obcaecati, pariatur ut quaerat nam natus in repellendus, voluptates cupiditate repudiandae? Voluptatum quae quod reiciendis necessitatibus incidunt animi repellendus a iusto, sed modi aut aliquam deleniti perferendis. Fugit voluptatem corrupti ducimus recusandae! Ad, voluptate! Deleniti vero veniam, quaerat consequatur excepturi impedit et vitae modi quas!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        

        User::create([
            'name' => 'Muthia syahrani sabar',
            'username' => 'muthia',
            'email' => 'muthia@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'toto lina',
        //     'email' => 'muthia05@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'nama' => 'Kampus Swasta',
            'slug' => 'kampus-swasta'
        ]);

        Category::create([
            'nama' => 'Kampus Negeri',
            'slug' => 'kampus-negeri'
        ]);


        Post::factory(0)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque, rerum 
        //                 corrupti illum inventore ut.',
        //     'body' => ' Ratione dicta id quam voluptates amet modi voluptate 
        //                 odit sequi dignissimos possimus velit debitis consequuntur libero numquam sapiente 
        //                 reprehenderit, consequatur odio ab doloribus aliquid labore illum blanditiis repudiandae.
        //                 Nisi nam molestias dolor, excepturi veritatis recusandae ab dolorem cum amet reiciendis repudiandae,
        //                 nihil beatae provident. Ex, repellat quod? Excepturi quod illum accusamus beatae, explicabo cupiditate
        //                 enim omnis natus sequi molestias aspernatur blanditiis. Mollitia asperiores porro, est, dignissimos cum 
        //                 accusamus rem obcaecati nihil nam ipsum quasi quo fuga. Fugiat fugit quia odio harum esse dicta cupiditate 
        //                 quidem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque, rerum 
        //                 corrupti illum inventore ut.',
        //     'body' => ' Ratione dicta id quam voluptates amet modi voluptate 
        //                 odit sequi dignissimos possimus velit debitis consequuntur libero numquam sapiente 
        //                 reprehenderit, consequatur odio ab doloribus aliquid labore illum blanditiis repudiandae.
        //                 Nisi nam molestias dolor, excepturi veritatis recusandae ab dolorem cum amet reiciendis repudiandae,
        //                 nihil beatae provident. Ex, repellat quod? Excepturi quod illum accusamus beatae, explicabo cupiditate
        //                 enim omnis natus sequi molestias aspernatur blanditiis. Mollitia asperiores porro, est, dignissimos cum 
        //                 accusamus rem obcaecati nihil nam ipsum quasi quo fuga. Fugiat fugit quia odio harum esse dicta cupiditate 
        //                 quidem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque, rerum 
        //                 corrupti illum inventore ut.',
        //     'body' => ' Ratione dicta id quam voluptates amet modi voluptate 
        //                 odit sequi dignissimos possimus velit debitis consequuntur libero numquam sapiente 
        //                 reprehenderit, consequatur odio ab doloribus aliquid labore illum blanditiis repudiandae.
        //                 Nisi nam molestias dolor, excepturi veritatis recusandae ab dolorem cum amet reiciendis repudiandae,
        //                 nihil beatae provident. Ex, repellat quod? Excepturi quod illum accusamus beatae, explicabo cupiditate
        //                 enim omnis natus sequi molestias aspernatur blanditiis. Mollitia asperiores porro, est, dignissimos cum 
        //                 accusamus rem obcaecati nihil nam ipsum quasi quo fuga. Fugiat fugit quia odio harum esse dicta cupiditate 
        //                 quidem.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque, rerum 
        //                 corrupti illum inventore ut.',
        //     'body' => ' Ratione dicta id quam voluptates amet modi voluptate 
        //                 odit sequi dignissimos possimus velit debitis consequuntur libero numquam sapiente 
        //                 reprehenderit, consequatur odio ab doloribus aliquid labore illum blanditiis repudiandae.
        //                 Nisi nam molestias dolor, excepturi veritatis recusandae ab dolorem cum amet reiciendis repudiandae,
        //                 nihil beatae provident. Ex, repellat quod? Excepturi quod illum accusamus beatae, explicabo cupiditate
        //                 enim omnis natus sequi molestias aspernatur blanditiis. Mollitia asperiores porro, est, dignissimos cum 
        //                 accusamus rem obcaecati nihil nam ipsum quasi quo fuga. Fugiat fugit quia odio harum esse dicta cupiditate 
        //                 quidem.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}

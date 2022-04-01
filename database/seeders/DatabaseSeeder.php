<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Yusuf Satria Borneo',
            'username' => 'Satria',
            'email' => 'yusufsatriaborneo@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Mahmut',
        //     'email' => 'mahmut@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programing',
            'slug' => 'programing-in'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-ertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam doloremque magni optio, iure at unde alias facilis eum. Numquam aut mollitia libero suscipit perferendis delectus aliquid corrupti, reprehenderit ad perspiciatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo, ad necessitatibus aspernatur inventore corporis at quia laudantium error voluptas consequuntur alias vitae velit placeat, maxime incidunt aliquid est repudiandae laboriosam exercitationem. Nostrum quaerat hic culpa explicabo mollitia. Optio possimus tempora, maxime esse architecto dicta voluptatem deleniti voluptates nemo accusantium!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam doloremque magni optio, iure at unde alias facilis eum. Numquam aut mollitia libero suscipit perferendis delectus aliquid corrupti, reprehenderit ad perspiciatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo, ad necessitatibus aspernatur inventore corporis at quia laudantium error voluptas consequuntur alias vitae velit placeat, maxime incidunt aliquid est repudiandae laboriosam exercitationem. Nostrum quaerat hic culpa explicabo mollitia. Optio possimus tempora, maxime esse architecto dicta voluptatem deleniti voluptates nemo accusantium!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Tiga',
        //     'slug' => 'judul-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam doloremque magni optio, iure at unde alias facilis eum. Numquam aut mollitia libero suscipit perferendis delectus aliquid corrupti, reprehenderit ad perspiciatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo, ad necessitatibus aspernatur inventore corporis at quia laudantium error voluptas consequuntur alias vitae velit placeat, maxime incidunt aliquid est repudiandae laboriosam exercitationem. Nostrum quaerat hic culpa explicabo mollitia. Optio possimus tempora, maxime esse architecto dicta voluptatem deleniti voluptates nemo accusantium!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Empat',
        //     'slug' => 'judul-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam doloremque magni optio, iure at unde alias facilis eum. Numquam aut mollitia libero suscipit perferendis delectus aliquid corrupti, reprehenderit ad perspiciatis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias explicabo, ad necessitatibus aspernatur inventore corporis at quia laudantium error voluptas consequuntur alias vitae velit placeat, maxime incidunt aliquid est repudiandae laboriosam exercitationem. Nostrum quaerat hic culpa explicabo mollitia. Optio possimus tempora, maxime esse architecto dicta voluptatem deleniti voluptates nemo accusantium!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

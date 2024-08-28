<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Post::factory(20)->create();

        User::create([
            'name' => 'Amiril',
            'username' => 'amirilrusdana',
            'email' => 'arusdana99@gmail.com',
            'password' => bcrypt('12345')
        ]);

        //  \App\Models\User::create([
        //     'name' => 'rusdana',
        //     'email' => 'ramiril@example.com',
        //     'password' => bcrypt('123456')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // \App\Models\Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum possimus, molestias atque, enim repellendus nihil incidunt doloribus, corporis numquam quia quod adipisci magni error deleniti.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum possimus, molestias atque, enim repellendus nihil incidunt doloribus, corporis numquam quia quod adipisci magni error deleniti.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iste corrupti tenetur voluptates natus error ipsum adipisci quasi illum saepe, nesciunt cum dignissimos veniam eos totam cupiditate. Possimus saepe obcaecati quo nostrum provident voluptatum cupiditate a impedit sapiente, quaerat sunt libero iusto sed mollitia, tenetur minus. Similique sint architecto sit!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quaerat, consectetur culpa alias nemo quia perferendis architecto itaque distinctio earum obcaecati quidem illo minus libero fugiat, sint minima commodi explicabo. Pariatur architecto excepturi esse magnam blanditiis laboriosam numquam. Officiis quos molestias illum odio repellat esse omnis totam, rerum, repudiandae commodi, asperiores quibusdam. Numquam, facilis iste veniam hic quia beatae velit expedita exercitationem tempora dignissimos laboriosam, odit ex quasi. Aut est earum tempora aperiam iusto enim.</p>'
        // ]);

        // \App\Models\Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum possimus, molestias atque, enim repellendus nihil incidunt doloribus, corporis numquam quia quod adipisci magni error deleniti.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum possimus, molestias atque, enim repellendus nihil incidunt doloribus, corporis numquam quia quod adipisci magni error deleniti.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iste corrupti tenetur voluptates natus error ipsum adipisci quasi illum saepe, nesciunt cum dignissimos veniam eos totam cupiditate. Possimus saepe obcaecati quo nostrum provident voluptatum cupiditate a impedit sapiente, quaerat sunt libero iusto sed mollitia, tenetur minus. Similique sint architecto sit!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quaerat, consectetur culpa alias nemo quia perferendis architecto itaque distinctio earum obcaecati quidem illo minus libero fugiat, sint minima commodi explicabo. Pariatur architecto excepturi esse magnam blanditiis laboriosam numquam. Officiis quos molestias illum odio repellat esse omnis totam, rerum, repudiandae commodi, asperiores quibusdam. Numquam, facilis iste veniam hic quia beatae velit expedita exercitationem tempora dignissimos laboriosam, odit ex quasi. Aut est earum tempora aperiam iusto enim.</p>'
        // ]);
    }
}

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
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Muhammad Afif',
            'username' => "afif21",
            'email' => 'muhammadafifjpr@gmail.com',
            'password' => bcrypt('Afif21jepara')
        ]);

        // User::create([
        //     'name' => 'Dimas',
        //     'email' => 'dimas@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        \App\Models\User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem similique eius incidunt veniam nostrum, dignissimos hic doloremque!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae adipisci sed nulla praesentium pariatur corporis, architecto ratione natus corrupti cupiditate hic optio ipsam sunt facere, nihil ab voluptas odio eum. Iusto, delectus eligendi? Animi adipisci aliquam blanditiis ullam id quo Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed hic enim ipsam? Consectetur et ipsum ratione sit ipsam alias dolorum eius aspernatur eum eligendi nobis itaque, dicta magni illo optio soluta, cum pariatur nemo voluptatibus vero velit? Debitis alias eveniet esse qui voluptas exercitationem. Harum, cumque inventore. Commodi, magnam tempora.'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem similique eius incidunt veniam nostrum, dignissimos hic doloremque!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae adipisci sed nulla praesentium pariatur corporis, architecto ratione natus corrupti cupiditate hic optio ipsam sunt facere, nihil ab voluptas odio eum. Iusto, delectus eligendi? Animi adipisci aliquam blanditiis ullam id quo Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed hic enim ipsam? Consectetur et ipsum ratione sit ipsam alias dolorum eius aspernatur eum eligendi nobis itaque, dicta magni illo optio soluta, cum pariatur nemo voluptatibus vero velit? Debitis alias eveniet esse qui voluptas exercitationem. Harum, cumque inventore. Commodi, magnam tempora.'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem similique eius incidunt veniam nostrum, dignissimos hic doloremque!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae adipisci sed nulla praesentium pariatur corporis, architecto ratione natus corrupti cupiditate hic optio ipsam sunt facere, nihil ab voluptas odio eum. Iusto, delectus eligendi? Animi adipisci aliquam blanditiis ullam id quo Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed hic enim ipsam? Consectetur et ipsum ratione sit ipsam alias dolorum eius aspernatur eum eligendi nobis itaque, dicta magni illo optio soluta, cum pariatur nemo voluptatibus vero velit? Debitis alias eveniet esse qui voluptas exercitationem. Harum, cumque inventore. Commodi, magnam tempora.'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem similique eius incidunt veniam nostrum, dignissimos hic doloremque!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae adipisci sed nulla praesentium pariatur corporis, architecto ratione natus corrupti cupiditate hic optio ipsam sunt facere, nihil ab voluptas odio eum. Iusto, delectus eligendi? Animi adipisci aliquam blanditiis ullam id quo Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed hic enim ipsam? Consectetur et ipsum ratione sit ipsam alias dolorum eius aspernatur eum eligendi nobis itaque, dicta magni illo optio soluta, cum pariatur nemo voluptatibus vero velit? Debitis alias eveniet esse qui voluptas exercitationem. Harum, cumque inventore. Commodi, magnam tempora.'
        // ]);


    }
}

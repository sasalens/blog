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
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Bang Sasa',
            'username' => 'bangsasa',
            'email' => 'bangsasa@gmail.com',
            'password' => bcrypt('12345')
        ]);
    //     User::create([
    //         'name' => 'Bang Jalil',
    //         'email' => 'bangjalil@gmail.com',
    //         'password' => bcrypt('54321')
    //     ]);
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

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur judul pertama.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ab ad perspiciatis modi veritatis. Est ex excepturi officiis sint tempora ipsa commodi, ducimus natus exercitationem rerum in! Harum eaque itaque rerum! Minus, quo? Iure fuga hic deleniti a corrupti fugiat quibusdam culpa libero, quisquam ratione voluptatibus itaque expedita commodi enim, eum alias quos magni sequi corporis sed officia beatae dolorum numquam. Minus repellendus fuga quaerat et blanditiis, soluta cum tempora veritatis sunt unde pariatur dicta neque explicabo quas animi qui corporis. Eveniet ut ab corrupti odio a sint veritatis accusamus laborum atque dignissimos alias, expedita aliquid ea temporibus, nemo recusandae?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla odit necessitatibus enim praesentium, quis non, eligendi commodi consequatur sequi et temporibus nam dignissimos laborum laudantium cupiditate nisi ipsam nesciunt qui quae, totam reiciendis dolore. Perspiciatis corporis non veritatis ea deleniti sed, eaque vitae asperiores explicabo reiciendis tempora quae minima laborum dolorem voluptas quam voluptatum! Ducimus necessitatibus dolore omnis? Magni voluptatem, sit provident asperiores quisquam, dicta, qui assumenda id sunt dolor nam animi harum at! Corrupti dolor neque suscipit doloribus aperiam molestiae similique itaque distinctio quam iure animi ab dolorum, nemo nihil tenetur commodi nulla praesentium laborum maiores! Odio, beatae magni.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque illum minus recusandae doloribus! Dignissimos vitae minima cum provident iusto libero tenetur deleniti magnam autem! Sint cupiditate pariatur iure hic excepturi?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur judul kedua.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ab ad perspiciatis modi veritatis. Est ex excepturi officiis sint tempora ipsa commodi, ducimus natus exercitationem rerum in! Harum eaque itaque rerum! Minus, quo? Iure fuga hic deleniti a corrupti fugiat quibusdam culpa libero, quisquam ratione voluptatibus itaque expedita commodi enim, eum alias quos magni sequi corporis sed officia beatae dolorum numquam. Minus repellendus fuga quaerat et blanditiis, soluta cum tempora veritatis sunt unde pariatur dicta neque explicabo quas animi qui corporis. Eveniet ut ab corrupti odio a sint veritatis accusamus laborum atque dignissimos alias, expedita aliquid ea temporibus, nemo recusandae?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla odit necessitatibus enim praesentium, quis non, eligendi commodi consequatur sequi et temporibus nam dignissimos laborum laudantium cupiditate nisi ipsam nesciunt qui quae, totam reiciendis dolore. Perspiciatis corporis non veritatis ea deleniti sed, eaque vitae asperiores explicabo reiciendis tempora quae minima laborum dolorem voluptas quam voluptatum! Ducimus necessitatibus dolore omnis? Magni voluptatem, sit provident asperiores quisquam, dicta, qui assumenda id sunt dolor nam animi harum at! Corrupti dolor neque suscipit doloribus aperiam molestiae similique itaque distinctio quam iure animi ab dolorum, nemo nihil tenetur commodi nulla praesentium laborum maiores! Odio, beatae magni.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque illum minus recusandae doloribus! Dignissimos vitae minima cum provident iusto libero tenetur deleniti magnam autem! Sint cupiditate pariatur iure hic excepturi?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur judul ketiga.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ab ad perspiciatis modi veritatis. Est ex excepturi officiis sint tempora ipsa commodi, ducimus natus exercitationem rerum in! Harum eaque itaque rerum! Minus, quo? Iure fuga hic deleniti a corrupti fugiat quibusdam culpa libero, quisquam ratione voluptatibus itaque expedita commodi enim, eum alias quos magni sequi corporis sed officia beatae dolorum numquam. Minus repellendus fuga quaerat et blanditiis, soluta cum tempora veritatis sunt unde pariatur dicta neque explicabo quas animi qui corporis. Eveniet ut ab corrupti odio a sint veritatis accusamus laborum atque dignissimos alias, expedita aliquid ea temporibus, nemo recusandae?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla odit necessitatibus enim praesentium, quis non, eligendi commodi consequatur sequi et temporibus nam dignissimos laborum laudantium cupiditate nisi ipsam nesciunt qui quae, totam reiciendis dolore. Perspiciatis corporis non veritatis ea deleniti sed, eaque vitae asperiores explicabo reiciendis tempora quae minima laborum dolorem voluptas quam voluptatum! Ducimus necessitatibus dolore omnis? Magni voluptatem, sit provident asperiores quisquam, dicta, qui assumenda id sunt dolor nam animi harum at! Corrupti dolor neque suscipit doloribus aperiam molestiae similique itaque distinctio quam iure animi ab dolorum, nemo nihil tenetur commodi nulla praesentium laborum maiores! Odio, beatae magni.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque illum minus recusandae doloribus! Dignissimos vitae minima cum provident iusto libero tenetur deleniti magnam autem! Sint cupiditate pariatur iure hic excepturi?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur judul keempat.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ab ad perspiciatis modi veritatis. Est ex excepturi officiis sint tempora ipsa commodi, ducimus natus exercitationem rerum in! Harum eaque itaque rerum! Minus, quo? Iure fuga hic deleniti a corrupti fugiat quibusdam culpa libero, quisquam ratione voluptatibus itaque expedita commodi enim, eum alias quos magni sequi corporis sed officia beatae dolorum numquam. Minus repellendus fuga quaerat et blanditiis, soluta cum tempora veritatis sunt unde pariatur dicta neque explicabo quas animi qui corporis. Eveniet ut ab corrupti odio a sint veritatis accusamus laborum atque dignissimos alias, expedita aliquid ea temporibus, nemo recusandae?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla odit necessitatibus enim praesentium, quis non, eligendi commodi consequatur sequi et temporibus nam dignissimos laborum laudantium cupiditate nisi ipsam nesciunt qui quae, totam reiciendis dolore. Perspiciatis corporis non veritatis ea deleniti sed, eaque vitae asperiores explicabo reiciendis tempora quae minima laborum dolorem voluptas quam voluptatum! Ducimus necessitatibus dolore omnis? Magni voluptatem, sit provident asperiores quisquam, dicta, qui assumenda id sunt dolor nam animi harum at! Corrupti dolor neque suscipit doloribus aperiam molestiae similique itaque distinctio quam iure animi ab dolorum, nemo nihil tenetur commodi nulla praesentium laborum maiores! Odio, beatae magni.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque illum minus recusandae doloribus! Dignissimos vitae minima cum provident iusto libero tenetur deleniti magnam autem! Sint cupiditate pariatur iure hic excepturi?</p>'
        // ]);
    }
}

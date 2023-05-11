<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Eka Wahyu Budi Santoso',
            'email' => 'ekawahyubudisantoso22@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Doddy Ferdiansyah',
            'email' => 'doddy@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Blog::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Pertama - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, atque beatae. Maiores quidem magnam architecto sit libero non quos quaerat',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, atque beatae. Maiores quidem magnam architecto sit libero non quos quaerat numquam, consequuntur debitis, ullam incidunt.</p><p>Optio alias, est perferendis molestiae itaque non repudiandae, dolores placeat nam rerum debitis excepturi exercitationem quae quas suscipit tempore laboriosam iste dolorum! Alias voluptate omnis id, iure ipsam veritatis, culpa modi repellat doloremque pariatur laudantium corrupti nesciunt aut optio odio molestiae voluptatem itaque dolorum aspernatur temporibus maiores suscipit soluta assumenda earum.</p><p>Adipisci, quae quo! Unde, sequi? Sunt eum aut incidunt mollitia et libero ipsa nihil modi nobis nisi quia quas, alias repellendus distinctio voluptas in rem. Ipsa molestiae, consequuntur officia cupiditate soluta eos corporis laudantium ipsum vitae. Optio, ex velit ipsum ducimus alias reprehenderit aut delectus, aliquam nobis voluptatibus architecto ipsa rem facilis vero expedita.</p><p>Consequatur delectus quas obcaecati saepe voluptas tempore! Praesentium, temporibus iusto in soluta itaque, aspernatur nulla quidem saepe ad ab deleniti?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Blog::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Kedua - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, atque beatae. Maiores quidem magnam architecto sit libero non quos quaerat',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, atque beatae. Maiores quidem magnam architecto sit libero non quos quaerat numquam, consequuntur debitis, ullam incidunt.</p><p>Optio alias, est perferendis molestiae itaque non repudiandae, dolores placeat nam rerum debitis excepturi exercitationem quae quas suscipit tempore laboriosam iste dolorum! Alias voluptate omnis id, iure ipsam veritatis, culpa modi repellat doloremque pariatur laudantium corrupti nesciunt aut optio odio molestiae voluptatem itaque dolorum aspernatur temporibus maiores suscipit soluta assumenda earum.</p><p>Adipisci, quae quo! Unde, sequi? Sunt eum aut incidunt mollitia et libero ipsa nihil modi nobis nisi quia quas, alias repellendus distinctio voluptas in rem. Ipsa molestiae, consequuntur officia cupiditate soluta eos corporis laudantium ipsum vitae. Optio, ex velit ipsum ducimus alias reprehenderit aut delectus, aliquam nobis voluptatibus architecto ipsa rem facilis vero expedita.</p><p>Consequatur delectus quas obcaecati saepe voluptas tempore! Praesentium, temporibus iusto in soluta itaque, aspernatur nulla quidem saepe ad ab deleniti?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Blog::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Ketiga - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, atque beatae. Maiores quidem magnam architecto sit libero non quos quaerat',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, atque beatae. Maiores quidem magnam architecto sit libero non quos quaerat numquam, consequuntur debitis, ullam incidunt.</p><p>Optio alias, est perferendis molestiae itaque non repudiandae, dolores placeat nam rerum debitis excepturi exercitationem quae quas suscipit tempore laboriosam iste dolorum! Alias voluptate omnis id, iure ipsam veritatis, culpa modi repellat doloremque pariatur laudantium corrupti nesciunt aut optio odio molestiae voluptatem itaque dolorum aspernatur temporibus maiores suscipit soluta assumenda earum.</p><p>Adipisci, quae quo! Unde, sequi? Sunt eum aut incidunt mollitia et libero ipsa nihil modi nobis nisi quia quas, alias repellendus distinctio voluptas in rem. Ipsa molestiae, consequuntur officia cupiditate soluta eos corporis laudantium ipsum vitae. Optio, ex velit ipsum ducimus alias reprehenderit aut delectus, aliquam nobis voluptatibus architecto ipsa rem facilis vero expedita.</p><p>Consequatur delectus quas obcaecati saepe voluptas tempore! Praesentium, temporibus iusto in soluta itaque, aspernatur nulla quidem saepe ad ab deleniti?</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Blog::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Keempat - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, atque beatae. Maiores quidem magnam architecto sit libero non quos quaerat',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, atque beatae. Maiores quidem magnam architecto sit libero non quos quaerat numquam, consequuntur debitis, ullam incidunt.</p><p>Optio alias, est perferendis molestiae itaque non repudiandae, dolores placeat nam rerum debitis excepturi exercitationem quae quas suscipit tempore laboriosam iste dolorum! Alias voluptate omnis id, iure ipsam veritatis, culpa modi repellat doloremque pariatur laudantium corrupti nesciunt aut optio odio molestiae voluptatem itaque dolorum aspernatur temporibus maiores suscipit soluta assumenda earum.</p><p>Adipisci, quae quo! Unde, sequi? Sunt eum aut incidunt mollitia et libero ipsa nihil modi nobis nisi quia quas, alias repellendus distinctio voluptas in rem. Ipsa molestiae, consequuntur officia cupiditate soluta eos corporis laudantium ipsum vitae. Optio, ex velit ipsum ducimus alias reprehenderit aut delectus, aliquam nobis voluptatibus architecto ipsa rem facilis vero expedita.</p><p>Consequatur delectus quas obcaecati saepe voluptas tempore! Praesentium, temporibus iusto in soluta itaque, aspernatur nulla quidem saepe ad ab deleniti?</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Kopriyanto',
        //     'email' => 'kopriyan003@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sandika',
        //     'email' => 'sandika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

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
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus odio et eligendi corrupti repudiandae delectus, commodi in aliquid atque aperiam? Est quo neque, ipsa sunt temporibus nesciunt qui perferendis consequatur cupiditate, adipisci, veritatis unde exercitationem voluptas expedita nostrum<p><p>Consectetur similique mollitia laborum aperiam tempora eius at molestiae sint, enim fugit corporis dolores laboriosam assumenda illum maiores aliquid eos laudantium aspernatur? Sint vel laudantium libero, error quo maxime a in!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum vel nam facere magni dolorum ab saepe, ipsa omnis, laborum, laboriosam praesentium laudantium exercitationem. Iusto, quod! Blanditiis sint tenetur tempora eveniet!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur cumque ipsam tenetur omnis totam nam et eveniet vitae, culpa saepe qui iure iste, ratione ea facilis rerum accusantium quis doloribus velit, quas voluptas ab. Facere maxime temporibus impedit adipisci error voluptates non, magni molestias tempora veritatis, dicta fugit illum harum.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus odio et eligendi corrupti repudiandae delectus, commodi in aliquid atque aperiam? Est quo neque, ipsa sunt temporibus nesciunt qui perferendis consequatur cupiditate, adipisci, veritatis unde exercitationem voluptas expedita nostrum<p><p>Consectetur similique mollitia laborum aperiam tempora eius at molestiae sint, enim fugit corporis dolores laboriosam assumenda illum maiores aliquid eos laudantium aspernatur? Sint vel laudantium libero, error quo maxime a in!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum vel nam facere magni dolorum ab saepe, ipsa omnis, laborum, laboriosam praesentium laudantium exercitationem. Iusto, quod! Blanditiis sint tenetur tempora eveniet!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur cumque ipsam tenetur omnis totam nam et eveniet vitae, culpa saepe qui iure iste, ratione ea facilis rerum accusantium quis doloribus velit, quas voluptas ab. Facere maxime temporibus impedit adipisci error voluptates non, magni molestias tempora veritatis, dicta fugit illum harum.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'user_id' => 2,
        //     'category_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus adipisci libero, odit obcaecati placeat deleniti veritatis natus enim aperiam asperiores vitae unde culpa magni optio, ex eos, laboriosam distinctio sapiente aliquid totam quos molestiae! Voluptate hic, nam, ad dolore repellendus odio et eligendi corrupti repudiandae delectus, commodi in aliquid atque aperiam? Est quo neque, ipsa sunt temporibus nesciunt qui perferendis consequatur cupiditate, adipisci, veritatis unde exercitationem voluptas expedita nostrum<p><p>Consectetur similique mollitia laborum aperiam tempora eius at molestiae sint, enim fugit corporis dolores laboriosam assumenda illum maiores aliquid eos laudantium aspernatur? Sint vel laudantium libero, error quo maxime a in!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum vel nam facere magni dolorum ab saepe, ipsa omnis, laborum, laboriosam praesentium laudantium exercitationem. Iusto, quod! Blanditiis sint tenetur tempora eveniet!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur cumque ipsam tenetur omnis totam nam et eveniet vitae, culpa saepe qui iure iste, ratione ea facilis rerum accusantium quis doloribus velit, quas voluptas ab. Facere maxime temporibus impedit adipisci error voluptates non, magni molestias tempora veritatis, dicta fugit illum harum.</p>'
        // ]);
    }
}

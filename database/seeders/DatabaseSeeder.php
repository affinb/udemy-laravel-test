<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            // シーダーのパスを書いて実行
            // php artisan migrate:fresh --seed
            TestSeeder::class,
            UserSeeder::class,
            AreaSeeder::class, // 親を先に書く（Area）
            ShopSeeder::class,
        ]);

        // factory
        \App\Models\ContactForm::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

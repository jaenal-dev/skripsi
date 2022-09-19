<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\{UserSeeder, PejabatSeeder, AnggaranSeeder, LocationSeeder, TransportSeeder, KodeRekeningSeeder};

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            LocationSeeder::class,
            TransportSeeder::class,
            UserSeeder::class,
            AnggaranSeeder::class,
            KodeRekeningSeeder::class,
            PejabatSeeder::class
        ]);
    }
}

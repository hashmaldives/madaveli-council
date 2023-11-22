<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@hash.mv',
            'password' => '$2y$10$AC6kYUPEIIn1/FsbqlqHSO75Uj/NWS.S8KZMoWdJKgZkVfvnIHsMy'
        ]);

        

    }
}

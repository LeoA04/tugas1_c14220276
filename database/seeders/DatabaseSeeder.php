<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(3)->create();

        EventCategory::insert([
            ['name' => 'Expo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Concert', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Conference', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

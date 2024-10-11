<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrganizersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Organizer::insert([
            ['name' => 'Organizer 1', 'description' => 'Description for Organizer 1', 'facebook_link' => 'https://facebook.com/organizer1', 'x_link' => 'https://x.com/organizer1', 'website_link' => 'https://organizer1.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Organizer 2', 'description' => 'Description for Organizer 2', 'facebook_link' => 'https://facebook.com/organizer2', 'x_link' => 'https://x.com/organizer2', 'website_link' => 'https://organizer2.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Organizer 3', 'description' => 'Description for Organizer 3', 'facebook_link' => 'https://facebook.com/organizer3', 'x_link' => 'https://x.com/organizer3', 'website_link' => 'https://organizer3.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Organizer 4', 'description' => 'Description for Organizer 4', 'facebook_link' => 'https://facebook.com/organizer4', 'x_link' => 'https://x.com/organizer4', 'website_link' => 'https://organizer4.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Organizer 5', 'description' => 'Description for Organizer 5', 'facebook_link' => 'https://facebook.com/organizer5', 'x_link' => 'https://x.com/organizer5', 'website_link' => 'https://organizer5.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

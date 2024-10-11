<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Factory as Faker;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        Event::insert([
            [
                'title' => 'Surabaya Music Festival', 
                'venue' => 'Surabaya Convention Center', 
                'date' => '2024-12-01',
                'start_time' => '19:00:00',
                'description' => $faker->text(),
                'tags' => 'music, festival, concert',
                'organizer_id' => 1,
                'event_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Surabaya Food Festival', 
                'venue' => 'Surabaya Convention Center', 
                'date' => '2024-12-01',
                'start_time' => '19:00:00',
                'description' => $faker->text(),
                'tags' => 'music, festival, concert',
                'organizer_id' => 1,
                'event_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Surabaya Cosplay Festival', 
                'venue' => 'Surabaya Convention Center', 
                'date' => '2024-12-01',
                'start_time' => '19:00:00',
                'description' => $faker->text(),
                'tags' => 'music, festival, concert',
                'organizer_id' => 1,
                'event_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

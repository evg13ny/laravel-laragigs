<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
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
        User::factory(5)->create();

        Listing::create([
            'title' => 'test developer',
            'tags' => 'laravel, php',
            'company' => 'test company',
            'location' => 'spb, fl',
            'email' => 'tc@mal.com',
            'website' => 'www.tc.com',
            'description' => 'test desc'
        ]);

        Listing::create([
            'title' => 'test developer2',
            'tags' => 'laravel, php2',
            'company' => 'test company2',
            'location' => 'spb, fl2',
            'email' => 'tc@mal.com2',
            'website' => 'www.tc.com2',
            'description' => 'test desc2'
        ]);
    }
}

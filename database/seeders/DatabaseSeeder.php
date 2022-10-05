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
        // \App\Models\User::factory(10)->create();

        //new user admin with password admin
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin')
        ]);

        
    }
}

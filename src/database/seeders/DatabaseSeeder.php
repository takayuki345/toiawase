<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

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

        $this->call(GendersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        // $this->call(ContactsTableSeeder::class);
        Contact::factory(35)->create();

    }
}

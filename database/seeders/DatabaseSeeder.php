<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bee;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* $this -> call (BeeSeeder::class); */
       Bee::factory(50) -> create();
       User::factory(30) -> create();
    }
}

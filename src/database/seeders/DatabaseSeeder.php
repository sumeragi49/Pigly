<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Weight_logsTableSeeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\Weight_targetTableSeeder;
use App\Models\Weight_logs;
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
        $this->call([Weight_logsTableSeeder::class]);
        // \App\Models\User::factory(10)->create();
        $this->call(Weight_targetTableSeeder::class);
    }
}

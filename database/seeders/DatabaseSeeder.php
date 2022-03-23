<?php

namespace Database\Seeders;

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

        DB::table('tasks')->insert([
            'task name' => 'task1',
            'task description' => 'task1 test',
        ]);

        DB::table('tasks')->insert([
            'task name' => 'task2',
            'task description' => 'task2 test',
        ]);
    }
}

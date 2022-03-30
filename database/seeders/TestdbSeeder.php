<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use App\Models\User;

class TestdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
            'name' => 'jhon',
            'email' => 'jhon@email.com',
            'password' => '12345'
        ]);

        User::create([
            'id' => '2',
            'name' => 'jane',
            'email' => 'jane@email.com',
            'password' => '67890'
        ]);

        User::create([
            'id' => '3',
            'name' => 'justin',
            'email' => 'justin@email.com',
            'password' => '13579'
        ]);

        Task::create([
            'description' => 'task1 test',
            'user_id' => '1'
        ]);

        Task::create([
            'description' => 'task2 test',
            'user_id' => '1'
        ]);

        Task::create([
            'description' => 'task3 test',
            'user_id' => '1'
        ]);

        Task::create([
            'description' => 'task1 test',
            'user_id' => '2'
        ]);

        Task::create([
            'description' => 'task2 test',
            'user_id' => '2'
        ]);

        Task::create([
            'description' => 'task3 test',
            'user_id' => '2'
        ]);

        Task::create([
            'description' => 'task1 test',
            'user_id' => '3'
        ]);

        Task::create([
            'description' => 'task2 test',
            'user_id' => '3'
        ]);

        Task::create([
            'description' => 'task3 test',
            'user_id' => '3'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TestdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**DB::table('tasks')->insert([
            'task name' => 'task1',
            'task description' => 'task1 test',
        ]);*/

        Task::create([
                'description' => 'task1 test',
                'user_id' => '1'
        ]);
    }
}

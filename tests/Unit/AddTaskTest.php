<?php

namespace Tests\Unit;

use App\Providers\RouteServiceProvider;
use Tests\TestCase;

class AddTaskTest extends TestCase
{
    public function addTask()
    {
        $response = $this->post('\task', [
    	    'description' => 'test task description',
        ]);

        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
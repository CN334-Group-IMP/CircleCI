<?php

namespace Tests\Unit;

use Tests\TestCase;

class RegistrationTest extends TestCase
{
    public function register() 
    {
        $response = $this->post('/register', [
            'name' => 'Gorilla',
            'email' => 'test@example.com',
            'password' => '12345',
            'password_confirmation' => '12345',
        ]);

        $this->assertAuthenticated();
        $response->assertStatus(201);
    }
}
<?php

namespace Tests\Feature;

use Tests\TestCase;


class ExampleHttpTest extends TestCase
{
    public function testUserCreationEndpointTest()
    {
        $name = "allmight";
        $email = "test@email.com";
        $password = "mypassword";

        $response = $this->postJson('/api/createuser', [
            'name' => $name, 
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password
        ]); 

        $response
            ->assertStatus(201)
            ->assertExactJson([
                'message' => "Successfully created user!",
            ]);
    }
}

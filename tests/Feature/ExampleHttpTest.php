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

        
        if($response->assertStatus(201))
        {
                $response->assertExactJson([
                'message' => "Successfully created user!",
            ]   );
        }
        elseif($response->assertStatus(404))
        {
                $response->assertExactJson([
                'message' => "Error, controller or response do not exist",
            ]   );
        }
    }
}

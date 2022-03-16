<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class CreateUserTest extends TestCase
{
    public function testUserCreation()
    {
        $user = new User([
            'name' => "Test User",
            'email' => "test@mail.com",
            'password' => "testpassword"
        ]);   

        $this->assertEquals('Test User', $user->name);
    }
}
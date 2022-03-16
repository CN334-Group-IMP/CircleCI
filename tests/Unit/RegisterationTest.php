<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterationTest extends TestCase
{
    public function testUserCreation()
    {
        $user = new User([
            'name' => "Test User",
            'email' => "test@mail.com",
            'password' => bcrypt("testpassword")
        ]);   

        $this->assertEquals('Test User', $user->name);
    }
}

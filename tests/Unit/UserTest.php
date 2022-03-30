<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase{

    //ทดสอบว่ามี field name
    public function test_schema_name()
    {
        $user = new User([
            'name' => 'jake',
            'email' => 'jake@mail.com',
            'password' => 'jakepassword',
        ]);   

        $this->assertEquals('jake', $user->name);
    }

    //ทดสอบว่ามี field email
    public function test_schema_email()
    {
        $user = new User([
            'name' => 'jake',
            'email' => 'jake@mail.com',
            'password' => 'jakepassword',
        ]);   

        $this->assertEquals('jake@mail.com', $user->email);
    }

    //ทดสอบว่ามี field password
    public function test_schema_password()
    {
        $user = new User([
            'name' => 'jake',
            'email' => 'jake@mail.com',
            'password' => 'jakepassword',
        ]);   

        $this->assertEquals('jakepassword', $user->password);
    }

    //ทดสอบว่า name เป็นภาษาไทยได้หรือไม่
    public function test_in_thai_name()
    {
        $user = new User([
            'name' => 'ทนงทวย คงควรคอย',
            'email' => 'jake@mail.com',
            'password' => 'jakepassword',
        ]);   

        $this->assertEquals('ทนงทวย คงควรคอย', $user->name);
    }

    //ทดสอบว่า name เป็นตัวเลขอย่างเดียวได้หรือไม่
    public function test_in_num_name()
    {
        $user = new User([
            'name' => '0123456789',
            'email' => 'jake@mail.com',
            'password' => 'jakepassword',
        ]);   

        $this->assertEquals('0123456789', $user->name);
    }

    //ทดสอบว่า name เป็นตัวอักษรพิเศษอย่างเดียวได้หรือไม่
    public function test_in_special_name()
    {
        $user = new User([
            'name' => '@#$%&*_=+-/|><[]{}!~',
            'email' => 'jake@mail.com',
            'password' => 'jakepassword',
        ]);   

        $this->assertEquals('@#$%&*_=+-/|><[]{}!~', $user->name);
    }

    //ทดสอบว่า name เป็นตัวอักษรผสเลขผสมตัวอักษรพิเศษได้หรือไม่
    public function test_in_alpha_num_special_name()
    {
        $user = new User([
            'name' => '@#$%jake0123กขฃคฅ',
            'email' => 'jake@mail.com',
            'password' => 'jakepassword',
        ]);   

        $this->assertEquals('@#$%jake0123กขฃคฅ', $user->name);
    }

    //ทดสอบว่า password เป็นตัวเลขอย่างเดียวได้หรือไม่
    public function test_in_num_password()
    {
        $user = new User([
            'name' => 'jake',
            'email' => 'jake@mail.com',
            'password' => '0123456789',
        ]);   

        $this->assertEquals('0123456789', $user->name);
    }

    //ทดสอบว่า password เป็นภาษาไทยได้หรือไม่
    public function test_in_thai_password()
    {
        $user = new User([
            'name' => 'jake',
            'email' => 'jake@mail.com',
            'password' => 'ก็มันชอบคุณนะแต่เดี๋ยวก่อนยังทำใจไม่ทัน',
        ]);   

        $this->assertEquals('ก็มันชอบคุณนะแต่เดี๋ยวก่อนยังทำใจไม่ทัน', $user->password);
    }

    //ทดสอบว่า password เป็นตัวอักษรพิเศษอย่างเดียวได้หรือไม่
    public function test_in_special_password()
    {
        $user = new User([
            'name' => 'jake',
            'email' => 'jake@mail.com',
            'password' => '@#$%&*_=+-/|><[]{}!~',
        ]);   

        $this->assertEquals('@#$%&*_=+-/|><[]{}!~', $user->password);
    }

    //ทดสอบว่า password เป็นตัวอักษรผสเลขผสมตัวอักษรพิเศษได้หรือไม่
    public function test_in_alpha_num_special_password()
    {
        $user = new User([
            'name' => 'jake',
            'email' => 'jake@mail.com',
            'password' => '@#$%jakepassword0123กขฃคฅ',
        ]);   

        $this->assertEquals('@#$%jakepassword0123กขฃคฅ', $user->password);
    }

    //ทดสอบว่า email เป็นตัวเลขได้หรือไม่
    public function test_in_num_email()
    {
        $user = new User([
            'name' => 'jake',
            'email' => 'jake@mail.com',
            'password' => '@#$%jakepassword0123กขฃคฅ',
        ]);   

        $this->assertEquals('@#$%jakepassword0123กขฃคฅ', $user->password);
    }

    //ทดสอบว่า email ไม่มี @ ได้หรือไม่
    public function test_no_at_email()
    {
        $user = new User([
            'name' => 'jake',
            'email' => 'jakemail.com',
            'password' => '@#$%jakepassword0123กขฃคฅ',
        ]);   

        $this->assertEquals('jakemail.com', $user->email,'email value incorrect : no @ found');
    }


}
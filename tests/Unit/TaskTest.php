<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Task;

class TaskTest extends TestCase{

    //ทดสอบว่ามี field description ถูกต้อง
    public function test_schema_description()
    {
        $task = new Task([
            'user_id' => '1',
            'description' => 'bebe weight training',
        ]);

        $this -> assertEquals('bebe weight training', $task->description);
    }

    //ทดสอบว่ามี field user_id ถูกต้อง
    public function test_schema_user_id()
    {
        $task = new Task([
            'user_id' => '1',
            'description' => 'bebe weight training',
        ]);

        $this -> assertEquals('bebe weight training', $task->user_id);

    }

    //ทดสอบ description ว่าสามารถปล่อยว่างได้มั้ย
    public function test_blank_description()
    {
        $task = new Task([
            'user_id' => '1',
            'description' => '',
        ]);

        $this -> assertEquals('', $task->description);
    }

    //ทดสอบ description ว่าใส่ภาษาไทยได้มั้ย
    public function test_in_thai_description()
    {
        $task = new Task([
            'user_id' => '1',
            'description' => 'ออกกำลังกายตามคลิปเบเบ้',
        ]);

        $this -> assertEquals('ออกกำลังกายตามคลิปเบเบ้', $task->description);
    }

    //ทดสอบ description ว่าใส่ภาษาอังกฤษได้มั้ย
    public function test_in_eng_description()
    {
        $task = new Task([
            'user_id' => '1',
            'description' => 'Choreograph Sun Roof by Nicky Youre',
        ]);

        $this -> assertEquals('Choreograph Sun Roof by Nicky Youre', $task->description);       
    }

    //ทดสอบ description ว่าใส่แค่ตัวเลขได้มั้ย
    public function test_in_num_description()
    {
        $task = new Task([
            'user_id' => '1',
            'description' => '01234567899876543210',
        ]);

        $this -> assertEquals('01234567899876543210', $task->description); 
    }

    //ทดสอบ description ว่าใส่ตัวอักษรพิเศษได้มั้ย
    public function test_in_special_description()
    {
        $task = new Task([
            'user_id' => '1',
            'description' => '@#$%&*_=+-/|><[]{}!~',
        ]);

        $this -> assertEquals('@#$%&*_=+-/|><[]{}!~', $task->description); 
    }

    //ทดสอบ description ว่าใส่ตัวอักษรเกิน 100 ตัวได้มั้ย
    public function test_100_up_alpha_description()
    {
        $descrip = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%&*_=+-/|><[]{}!~กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรลวศษสหฬอฮอะอาอิอีอุอูเอแอไอโอใอๆ';
        $task = new Task([
            'user_id' => '1',
            'description' => $descrip,
        ]);

        $this -> assertEquals($descrip, $task->description); 
    }

    //ทดสอบ user_id ว่าเป็นตัวเลขเกิน 1000 หลักได้มั้ย
    public function test_1000_up_num_user_id()
    {
        $randomid = rand(1000,1000000);
        $task = new Task([
            'user_id' => $randomid,
            'description' => 'bebe weight training',
        ]);

        $this -> assertEquals($randomid, $task->user_id); 
    }

    //ทดสอบ user_id ว่าปล่อยว่างได้มั้ย'
    public function test_blank_user_id()
    {
        $task = new Task([
            'user_id' => '',
            'description' => 'bebe weight training',
        ]);

        $this -> assertEquals('', $task->user_id); 
    }

    //ทดสอบ user_id ว่าเป็นตัวอักษรได้มั้ย
    public function test_str_user_id()
    {
        $task = new Task([
            'user_id' => 'jhonny',
            'description' => 'bebe weight training',
        ]);

        $this -> assertEquals('jhonny', $task->user_id); 
    }

    //ทดสอบ user_id ว่าเป็นตัวอักษรผสมตัวเลขได้มั้ย
    public function test_str_int_user_id()
    {
        $task = new Task([
            'user_id' => '01jhonny',
            'description' => 'bebe weight training',
        ]);

        $this -> assertEquals('01jhonny', $task->user_id); 
    }

    //ทดสอบ user_id เป็น NULL ได้มั้ย
    public function test_null_user_id()
    {
        $task = new Task([
            'user_id' => null,
            'description' => 'bebe weight training',
        ]);

        $this -> assertEquals(null, $task->user_id); 
    }

    //ทดสอบ description เป็น NULL ได้มั้ย
    public function test_null_description()
    {
        $task = new Task([
            'user_id' => '1',
            'description' => null,
        ]);

        $this -> assertEquals(null, $task->user_id); 
    }

}
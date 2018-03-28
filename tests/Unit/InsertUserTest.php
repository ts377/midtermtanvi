<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user=new User();
        $user->name='Akshit';
        $user->email='Akshitsingh@example.com';
        $user->password='Akshitsingh2018';
        $user->remember_token='XXXXXXX156';
        $this->assertTrue($user->save());
    }
}

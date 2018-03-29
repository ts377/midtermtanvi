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
        $user->name='apple';
        $user->email='applesingh@example.com';
        $user->password='applesingh2018';
        $user->remember_token='XXXXXXX190';
        $this->assertTrue($user->save());
    }
}

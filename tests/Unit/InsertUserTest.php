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
        $user->name='Kas';
        $user->email='Kassingh@example.com';
        $user->password='Kassingh2018';
        $user->remember_token='ZyZZZ6346';
        $this->assertTrue($user->save());

    }
}

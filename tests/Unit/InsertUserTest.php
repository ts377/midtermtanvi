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
        $user->name='Aakash';
        $user->email='Aakashsingh@example.com';
        $user->password='akashsingh2018';
        $user->remember_token='YYYYY2345';
        $this->assertTrue($user->save());

    }
}

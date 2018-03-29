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
        $user->name='eaghl';
        $user->email='eagslhingh@example.com';
        $user->password='eagslhingh2018';
        $user->remember_token='Elo0s8346';
        $this->assertTrue($user->save());

    }
}

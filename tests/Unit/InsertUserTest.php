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
        $user->name='Steve Smith';
        $user->email='SteveSmith@example.org';
        $user->password='utrywrecsx';
        $user->remember_token='XXXXXXX000';

        $this->assertTrue($user->save());


    }
}

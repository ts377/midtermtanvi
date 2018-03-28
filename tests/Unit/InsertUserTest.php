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
        $user->name='Tanvi';
          $user->email='ts377@njit.edu';
          $user->password='tanvisingh';
            $user ->remember_token='Abc123klt' ;
        $this->assertTrue($user->save());

    }
}

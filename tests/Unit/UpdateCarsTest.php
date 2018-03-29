<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class UpdateCarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Car::find(53);

// update record
        $car->year = '2000';
        $car->save();

        $this->assertTrue($car->update());
    }    }


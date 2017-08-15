<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\ArrayUtilities;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGenerateRandomArray()
    {
        $array = ArrayUtilities::generateRandomArray();
        $array_2 = ArrayUtilities::generateRandomArray();
        $this->assertTrue(is_array($array));
        $this->assertTrue(true);
        $this->assertNotEquals($array_2[0],$array[0]);
    }

    public function testGetArrayAverage()
    {
        $val1 = ArrayUtilities::getArrayAverage([53,76,23,98,12]);
        $this->assertEquals($val1,52.4);
        $val2 = ArrayUtilities::getArrayAverage([11,99,55,32,12,43,56,76,34,76]);
        $this->assertEquals($val2,49.4);
    }  

    public function testGetArrayMedian()
    {
        $med1 = ArrayUtilities::getArrayMedian([45,76,23,98,46,85,24,64,23]);
        $this->assertEquals($med1,46);
        $med2 = ArrayUtilities::getArrayMedian([1,2,3,4,5,6,7,8,9]);
        $this->assertEquals($med2,5);
     } 
}

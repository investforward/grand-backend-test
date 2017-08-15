<?php

namespace App\Models;


class ArrayUtilities
{
    public function __construct(){

    }
    
  

    public static function getArrayMedian(array $input) {

        sort($input);
        $length = count($input);
        if($length%2 == 0 ) {
            return (($input[($length/2)-1] + $input[($length/2)])/2);
        } else {
            return $input[($length-1)/2];
        }
    }

    public static function getArrayAverage( $input) {
        $length = count($input);

        $sum = array_sum($input);

        return $length > 0 ? $sum / $length : null;
    }

    public static function generateRandomArray(){

        $low_range = 3;
        $high_range = 99;
        $low_count = 3;
        $high_count = 10;

        $count = rand($low_count,$high_count);

        $rand_array = [];
        for ($i = 0; $i <= $count; $i++) { 
            $rand_array[]=rand($low_range,$high_range);
        } 

        return $rand_array;
    }
}

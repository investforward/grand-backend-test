<?php
namespace App\InvestForward;

use League\Flysystem\Exception;

class Numbers
{
    public static function generateArray($minimum = 3, $maximum = 10)
    {
        $numbers = range(1, 99);
        shuffle($numbers);
        return array_slice($numbers, 0, rand($minimum, $maximum));
    }

    public static function average(array $numbers)
    {
        $numbers = Numbers::checkArray($numbers);
        return array_sum($numbers)/count($numbers);
    }

    public static function median(array $numbers)
    {
        $numbers = Numbers::checkArray($numbers);
        $arraySize = count($numbers);
        sort($numbers);
    
        $midPoint = floor(($arraySize - 1) / 2);
        if ($arraySize % 2) {
            $median = $numbers[$midPoint];
        } else {
            $low = $numbers[$midPoint];
            $high = $numbers[$midPoint + 1];
            $median = (($low + $high) / 2);
        }
        return $median;
    }

    private static function checkArray(array $array)
    {
        $numbers = array_filter($array, 'is_numeric');
        if (empty($numbers)) {
            throw new Exception('Array must contain numbers');
        }
        return $numbers;
    }
}

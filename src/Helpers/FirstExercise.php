<?php

namespace App\Helpers;

class FirstExercise
{

    const MAX = 100;

    public static function getNumbers(): array
    {
        $response = [];
        for ($i = 1; $i <= self::MAX; $i++) {
            $actual = $i;
            if (self::checkPrime($i)) {
                $actual .= " [PRIME]";
            } else {
                $actual .= ': (' . self::getMultiples($i) . ')';
            }
            array_push($response, $actual);
        }


        return $response;
    }

    private static function checkPrime(int $number): bool
    {
        $isPrime = true;

        for($i = 2; $i <= sqrt($number); $i++)
        {
            if($number % $i == 0)
            {
                $isPrime = false;
            }
        }

        return $isPrime;
    }

    private static function getMultiples(int $number): string
    {
        $numbers = [];
        for ($i = 1; $i < $number; $i++) {
            if ($number % $i == 0) {
                $numbers[] = $i;
            }
        }

        return implode(',', $numbers);
    }

}
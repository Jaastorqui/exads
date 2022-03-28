<?php

namespace App\Helpers;

class SecondExercise
{

    public static function getRandomArrayAscii(): array
    {
        $randomArrayAscii = [];
        $randomString = rand(10,30);
        for ($i = 0; $i < $randomString; $i++) {
            $randomNumberOfCharacters = rand(44, 124);
            $randomArrayAscii[] = chr($randomNumberOfCharacters);
        }

        return $randomArrayAscii;
    }

    public static function removeCharacter(array $generatedAscii): array
    {
        $removeRandomCharacter = rand(0, count($generatedAscii));
        $newGeneratedAscii = $generatedAscii;
        unset($newGeneratedAscii[$removeRandomCharacter]);
        return $newGeneratedAscii;
    }

    public static function getMissingLetter(array $generatedAscii, array $removedCharacter): array
    {
        return array_diff_key($generatedAscii, $removedCharacter);
    }

}
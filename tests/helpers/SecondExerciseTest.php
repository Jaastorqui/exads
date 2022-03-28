<?php

namespace Tests\helpers;

use App\Helpers\SecondExercise;
use PHPUnit\Framework\TestCase;

class SecondExerciseTest extends TestCase
{

    public function testRemoveCharacter()
    {
        $randomArray = SecondExercise::getRandomArrayAscii();
        $this->assertNotEquals($randomArray, SecondExercise::removeCharacter($randomArray));
    }

    public function testGetRandomArrayAscii()
    {
        $this->assertIsArray(SecondExercise::getRandomArrayAscii());
    }

    public function testGetMissingLetter()
    {
        $randomArray = SecondExercise::getRandomArrayAscii();
        $newGeneratedAscii = SecondExercise::removeCharacter($randomArray);

        $this->assertNotEmpty(SecondExercise::getMissingLetter($randomArray, $newGeneratedAscii));
    }
}

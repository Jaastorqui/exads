<?php

namespace App\Application\SecondExercise;

use App\Application\Action;
use App\Helpers\SecondExercise;
use Psr\Http\Message\ResponseInterface;

class SecondExerciseAction extends Action
{

    public function action(): ResponseInterface
    {
        $generatedAscii = SecondExercise::getRandomArrayAscii();
        $removedCharacter = SecondExercise::removeCharacter($generatedAscii);
        $missingletter = SecondExercise::getMissingLetter($generatedAscii, $removedCharacter);

        return $this->twig->render($this->response, 'second-exercise.twig', [
            'generatedAsciiString' => $generatedAscii,
            'removedCharacter' => $removedCharacter,
            'missingletter' => $missingletter
        ]);
    }
}
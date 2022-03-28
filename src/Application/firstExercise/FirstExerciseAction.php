<?php

namespace App\Application\FirstExercise;

use App\Application\Action;
use App\Helpers\FirstExercise;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\Twig;

class FirstExerciseAction extends Action
{

    public function action(): ResponseInterface
    {
        $values = FirstExercise::getNumbers();
        return $this->twig->render($this->response, 'first-exercise.twig', [
            'values' => $values
        ]);
    }
}
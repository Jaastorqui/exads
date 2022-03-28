<?php

namespace App\Application\ThirdExercise;

use Psr\Http\Message\ResponseInterface;

class ThirdExerciseAction extends TvSeriesAction
{

    public function action(): ResponseInterface
    {
        $tvSeries = $this->tvSeriesRepository->findAll();

        return $this->twig->render($this->response, 'third-exercise.twig', [
            'tvSeries' => $tvSeries
        ]);
    }
}
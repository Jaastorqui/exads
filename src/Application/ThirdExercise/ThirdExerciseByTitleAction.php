<?php

namespace App\Application\ThirdExercise;

use Psr\Http\Message\ResponseInterface;

class ThirdExerciseByTitleAction extends TvSeriesAction
{

    public function action(): ResponseInterface
    {
        $title = $this->resolveArg('title');
        $tvSeries = $this->tvSeriesRepository->findByTitle($title);

        return $this->twig->render($this->response, 'third-exercise.twig', [
            'tvSeries' => $tvSeries
        ]);
    }
}
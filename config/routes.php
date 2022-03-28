<?php
declare(strict_types=1);

use Slim\App;

return function (App $app) {

    $app->get('/', \App\Application\HomeAction::class)->setName('index');

    $app->get('/first-exercise', \App\Application\firstExercise\FirstExerciseAction::class)->setName('first-exercise');

    $app->get('/second-exercise', \App\Application\SecondExercise\SecondExerciseAction::class)->setName('second-exercise');

    $app->get('/third-exercise', \App\Application\ThirdExercise\ThirdExerciseAction::class)->setName('third-exercise');
    $app->post('/third-exercise', \App\Application\ThirdExercise\ThirdExerciseByTitleAction::class)->setName('third-exercise-title');

    $app->get('/fourth-exercise', \App\Application\FourthExercise\FourthExerciseAction::class)->setName('fourth-exercise');
    $app->get('/fourth-exercise/{id}/{designId}', \App\Application\FourthExercise\FourthExerciseDesignId::class)->setName('fourth-exercise-design');
};

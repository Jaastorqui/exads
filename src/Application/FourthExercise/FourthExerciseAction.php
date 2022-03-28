<?php

namespace App\Application\FourthExercise;

use App\Application\Action;
use App\Helpers\FourthExercise;
use Exads\ABTestData;
use Psr\Http\Message\ResponseInterface;

class FourthExerciseAction extends Action
{

    public function action(): ResponseInterface
    {
        $promoId = FourthExercise::getPromoId();
        $abTest = new ABTestData($promoId);
        $finalDesign = FourthExercise::getRandomDesignByRandomNumber($abTest->getAllDesigns());

        return $this->response
            ->withHeader('Location', '/fourth-exercise/' . $promoId . '/' . $finalDesign['designId'])
            ->withStatus(302);
    }
}
<?php

namespace App\Application\FourthExercise;

use App\Application\Action;
use App\Helpers\FourthExercise;
use Exads\ABTestData;
use Psr\Http\Message\ResponseInterface;

class FourthExerciseDesignId extends Action
{

    public function action(): ResponseInterface
    {
        $promo = new ABTestData($this->resolveParams('id'));
        $design = $promo->getDesign($this->resolveParams('designId'));

        return $this->twig->render($this->response, 'fourth-exercise.twig', [
            'promo' => $promo->getPromotionName(),
            'design' => $design
        ]);
    }
}
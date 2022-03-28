<?php

namespace Tests\helpers;

use App\Helpers\FourthExercise;
use PHPUnit\Framework\TestCase;

class FourthExerciseTest extends TestCase
{

    public function testGetPromoId()
    {
        $this->assertIsInt(FourthExercise::getPromoId());
    }

    public function testGetRandomDesignByRandomNumber()
    {
        $designs = [
            [ 'designId' => 1, 'designName' => 'Control Group', 'splitPercent' => 25 ],
            [ 'designId' => 2, 'designName' => 'Test Red Square', 'splitPercent' => 22 ],
            [ 'designId' => 3, 'designName' => 'Test Red Round', 'splitPercent' => 18 ],
            [ 'designId' => 4, 'designName' => 'Test Green Square', 'splitPercent' => 20 ],
            [ 'designId' => 5, 'designName' => 'Test Dark Round', 'splitPercent' => 15 ],
        ];

        $design = FourthExercise::getRandomDesignByRandomNumber($designs);
        $this->assertIsArray($design);
    }

}

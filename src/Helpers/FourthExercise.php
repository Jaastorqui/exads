<?php

namespace App\Helpers;

class FourthExercise
{

    public static function getPromoId(): int
    {
        return rand(1,3);
    }

    public static function getRandomDesignByRandomNumber(array $designs): array
    {
        $randomPercentage = rand(1,100);

        $designsValid = [];
        $unsortedDesign = self::getRandomDesignBySplitPercentage($unsortedDesign = $designs);

        $current = 0;
        $previous = 0;
        foreach ($unsortedDesign as $design) {
            $current += $design['splitPercent'];

            if ( $randomPercentage >= $previous && $randomPercentage <= $current ) {
                $designsValid = $design;
            }

            $previous = $current;
        }


        return $designsValid;

    }

    private static function getRandomDesignBySplitPercentage (array $designs): array
    {
        $splitPercentages = array();
        foreach ($designs as $key => $row)
        {
            $splitPercentages[$key] = $row['splitPercent'];
        }
        array_multisort($splitPercentages, SORT_ASC, $designs);

        return $designs;
    }

}
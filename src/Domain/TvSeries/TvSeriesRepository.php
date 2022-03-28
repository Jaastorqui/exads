<?php
declare(strict_types=1);

namespace App\Domain\TvSeries;

interface TvSeriesRepository
{
    /**
     * @return TvSeries[]
     */
    public function findAll(): array;

    public function findByTitle(string $title);
}

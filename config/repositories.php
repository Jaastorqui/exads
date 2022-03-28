<?php
declare(strict_types=1);

use App\Domain\TvSeries\TvSeriesRepository;
use App\Infrastructure\Persistence\TvSeries\DatabaseTvSeriesRepository;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        TvSeriesRepository::class => \DI\autowire(DatabaseTvSeriesRepository::class),
    ]);
};

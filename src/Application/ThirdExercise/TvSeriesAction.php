<?php
declare(strict_types=1);

namespace App\Application\ThirdExercise;

use App\Application\Action;
use App\Domain\TvSeries\TvSeriesRepository;
use Slim\Views\Twig;

abstract class TvSeriesAction extends Action
{
    protected TvSeriesRepository $tvSeriesRepository;

    public function __construct(Twig $twig, TvSeriesRepository $tvSeriesRepository)
    {
        parent::__construct($twig);
        $this->tvSeriesRepository = $tvSeriesRepository;
    }
}

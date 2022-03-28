<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\TvSeries;

use App\Domain\TvSeries\TvSeries;
use App\Domain\TvSeries\TvSeriesRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class DatabaseTvSeriesRepository implements TvSeriesRepository
{
    private EntityRepository $repository;


    public function __construct(EntityManager $entity_manager)
    {
        $this->repository = $entity_manager->getRepository(TvSeries::class);
    }


    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    public function findByTitle(string $title): array
    {
        return $this->repository->findBy([
            'title' => $title
        ]);
    }
}

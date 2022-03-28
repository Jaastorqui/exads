<?php
declare(strict_types=1);

namespace App\Domain\TvSeriesIntervals;

use JsonSerializable;

class TvSeriesIntervals implements JsonSerializable
{
    private ?int $id_tv_series;

    private int $week_day;

    private \DateTime $show_time;

    protected $tv_series;


    public function __construct(?int $id_tv_series, int $week_day, \DateTime $show_time)
    {
        $this->id_tv_series = $id_tv_series;
        $this->week_day = $week_day;
        $this->show_time = $show_time;
    }

    public function getIdTvSeries(): ?int
    {
        return $this->id_tv_series;
    }

    public function setIdTvSeries(?int $id_tv_series): void
    {
        $this->id_tv_series = $id_tv_series;
    }

    public function getWeekDay(): int|string
    {
        return $this->week_day;
    }

    public function setWeekDay(int|string $week_day): void
    {
        $this->week_day = $week_day;
    }

    public function getShowTime(): \DateTime
    {
        return $this->show_time;
    }

    public function setShowTime(\DateTime $show_time): void
    {
        $this->show_time = $show_time;
    }



    public function jsonSerialize(): array
    {
        return [
            'id_tv_series' => $this->id_tv_series,
            'week_day' => $this->week_day,
            'show_time' => $this->show_time
        ];
    }
}

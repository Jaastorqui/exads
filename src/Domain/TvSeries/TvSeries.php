<?php
declare(strict_types=1);

namespace App\Domain\TvSeries;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use JsonSerializable;
use Doctrine\ORM\Mapping\Column;

class TvSeries implements JsonSerializable
{
    private ?int $id;

    private string $title;

    private string $channel;

    private $tv_series_intervals;

    /**
     *@Column(type="string")
     *@varstring
     */
    private string $gender;

    public function __construct(?int $id, string $title, string $channel, string $gender)
    {
        $this->id = $id;
        $this->title = $title;
        $this->channel = $channel;
        $this->gender = $gender;
        $this->tv_series_intervals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function setChannel(string $channel): void
    {
        $this->channel = $channel;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function getTvSeriesIntervals(): Collection
    {
        return $this->tv_series_intervals;
    }

    public function setTvSeriesIntervals(Collection $tv_series_intervals): void
    {
        $this->tv_series_intervals = $tv_series_intervals;
    }



    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'channel' => $this->channel,
            'gender' => $this->gender,
        ];
    }
}

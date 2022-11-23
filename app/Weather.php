<?php

namespace App;

class Weather
{
    private string $locationName;
    private float $temperature;
    private int $humidity;
    private float $temperatureFeelsLike;
    private float $windSpeed;
    private string $weatherIcon;

    public function __construct(string $locationName, float $temperature, int $humidity, float $temperatureFeelsLike, float $windSpeed, string $weatherIcon)
    {
        $this->locationName = $locationName;
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->temperatureFeelsLike = $temperatureFeelsLike;
        $this->windSpeed = $windSpeed;
        $this->weatherIcon = $weatherIcon;
    }

    public function getHumidity(): int
    {
        return $this->humidity;
    }

    public function getLocationName(): string
    {
        return $this->locationName;
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getTemperatureFeelsLike(): float
    {
        return $this->temperatureFeelsLike;
    }

    public function getWeatherIcon(): string
    {
        return $this->weatherIcon;
    }

    public function getWindSpeed(): float
    {
        return $this->windSpeed;
    }
}
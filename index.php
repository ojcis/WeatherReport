<?php

require_once 'vendor/autoload.php';

use App\ApiClient;

const API_KEY='cf60e647aafa33c963a3f5a489d1964b';

$apiClient=new ApiClient(API_KEY);

$location=readline('enter location: ');

$weather=$apiClient->getWeather($location);

echo "Weather in {$weather->getLocationName()}:".PHP_EOL;
echo "temperature: {$weather->getTemperature()}°C, but feels like {$weather->getTemperatureFeelsLike()}°C".PHP_EOL;
echo "humidity: {$weather->getHumidity()} %".PHP_EOL;
echo "wind speed: {$weather->getWindSpeed()} m/s".PHP_EOL;


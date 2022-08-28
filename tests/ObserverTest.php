<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Observer;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class ObserverTest extends TestCase
{
    public function testObserver()
    {
        $weatherData = new WeatherData();
        $CurrentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
        $ForecastDisplay = new ForecastDisplay($weatherData);
        $forecastTemperatures = [
            22, 3, -1, 4, 65, 22, 3, 44,
        ];

        $weatherData->setMeasurements(22, 0.8, 1.2, $forecastTemperatures);

        $this->assertTrue(true);
    }
}

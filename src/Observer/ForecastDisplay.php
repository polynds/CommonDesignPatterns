<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Observer;

class ForecastDisplay implements Observer, DisplayElement
{
    protected WeatherData $weatherData;

    protected array $forecastTemperatures; // 未来几天的温度

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(Subject $subject)
    {
        $this->forecastTemperatures = $this->weatherData->getForecastTemperatures();
        $this->display();
    }

    public function display(): void
    {
        var_dump('未来几天的气温：');
        foreach ($this->forecastTemperatures as $index => $temperature) {
            var_dump('第' . $index . '天：温度为：' . $temperature . '℃');
        }
    }
}

<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace CommonDesignPatterns\Observer;

class WeatherData implements Subject
{
    protected array $observers = [];

    protected float $temperature; // 温度

    protected float $humidity; // 湿度

    protected float $pressure; // 气压

    protected array $forecastTemperatures; // 未来几天的温度

    public function registerObserver(Observer $observer)
    {
        $this->observers[get_class($observer)] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        unset($this->observers[get_class($observer)]);
    }

    public function notifyObserver()
    {
        /** @var Observer $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure, array $forecastTemperatures)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->forecastTemperatures = $forecastTemperatures;
        $this->notifyObserver();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }

    public function getForecastTemperatures(): array
    {
        return $this->forecastTemperatures;
    }
}

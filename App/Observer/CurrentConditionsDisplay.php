<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace App\Observer;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    protected WeatherData $weatherData;

    protected float $temperature; // 温度

    protected float $humidity; // 湿度

    protected float $pressure; // 气压

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(Subject $subject)
    {
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();
        $this->pressure = $this->weatherData->getPressure();
        $this->display();
    }

    public function display(): void
    {
        var_dump('当前温度为：' . $this->temperature . '℃');
        var_dump('当前湿度为：' . $this->humidity . '%');
        var_dump('当前气压为：' . $this->pressure . 'hPa');
    }
}

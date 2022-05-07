<?php

/*
 * (c) Aayog Koirala <koirala@miamioh.edu>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace koirala\OpenWeatherClient;

class WeatherDay
{
    private string $date;
    private string $unit;
    private int $temperature;
    private int $feelslike;
    private int $pressure;
    private int $humidity;
    /**
     * Creates a new OpenWeatherClient.
     */
    public function __construct($date, $unit, $temperature, $feelslike, $pressure, $humidity)
    {
	$this->date = $date;
        $this->unit = $unit;
        $this->temperature = $temperature;
        $this->feelsLike = $feelsLike;
        $this->pressure = $pressure;
        $this->humidity = $humidity;
    }

    /**
     * Returns the date.
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Returns the unit.
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Returns the temperature.
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Returns the feels like.
     */
    public function getFeelsLike()
    {
        return $this->feelsLike;
    }

    /**
     * Returns the pressure.
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * Returns the humidity.
     */
    public function getHumidity()
    {
        return $this->humidity;
    }
}

<?php

namespace Auto;

require_once "car.php";
require_once "transmissionauto.php";
require_once "transmissionmanual.php";
class Niva extends Car
{
    public $transmission;
    public $direct;
    use TransmissionAuto, TransmissionManual {
        TransmissionAuto::setBackAuto insteadof TransmissionManual;
        TransmissionAuto::setBack insteadof TransmissionManual;
        TransmissionManual::setBackManual insteadof  TransmissionAuto;
    }
    
    public function __construct($enginePower, $transmission = "ручная")
    {
        print "<br><hr>";
        print "Подготовка  автомобиля Нива<br>".PHP_EOL;
        if ($transmission === "ручная") {
            $this->setTransmissionManual();
            $this->transmission = "ручная";
            print "Коробка передач $this->transmission<br>".PHP_EOL;
        } elseif ($transmission === "автоматическая") {
            $this->setTransmissionAuto();
            $this->transmission = "автоматическая";
            print "Коробка передач $this->transmission<br>".PHP_EOL;
        }
        print "<br><hr>";
        parent::__construct($enginePower, $transmission);
        print "<br><hr>";
    }
    
    public function startMove($distance, $speed, $direction = "вперед")
    {
        $haystack = ['вперед', "назад"];
        $this->direct = isset($this->direct) ? $direction : "вперед";
        $this->direct = in_array($this->direct, $haystack) ? $this->direct : null;
        if (intval($distance) > 0 && filter_var($speed, FILTER_SANITIZE_NUMBER_INT)) {
            print "Машина поехала...<br>".PHP_EOL;
        }
        $speed = is_bool($this->maxSpeed < (int)$speed) ? $this->maxSpeed : $speed;
        $speed = (int)($speed);
        if ($this->auto) {
            isset($this->direct) ? $this->driveUpAuto($speed) : $this->driveBackAuto($speed);
        } elseif ($this->manual) {
            isset($this->direct) ? $this->driveUpManual($speed) : $this->driveBackManual($speed);
        }
        
        $location = 0;
        while (($distance - $location) >= 10) {
            $location += 10;
            print "Проехали $location метров.<br>".PHP_EOL;
            $this->temperatureUp(5);
        }
        if ($distance > $location) {
            print "Проехали $location метров.<br>".PHP_EOL;
            $this->temperatureUp(round($distance - $location, 1, 1));
        }
    }
    
    public function __destruct()
    {
        $this->setNeutralTransmission();
        $this->engineOff();
        parent::__destruct();
    }
}

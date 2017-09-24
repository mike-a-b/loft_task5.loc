<?php

namespace Auto;

class Car
{
    public $transmission;
    use Engine;
    /*
    public $enginePower; //кол-во лош. сил
    public $temperature;
    public $maxSpeed; //л.с  x 2
     */
    
    public function __construct($power, $trans = "ручная")
    {
        $this->setPower($power);
        $this->setTemperature(0);
        $this->setMaxSpeed();
        if ($this->enginePower > 0 && $this->enginePower < 200) {
            exit("Установлен слишком сильный двигатель, перегрузка. Стоп".PHP_EOL);
        }
        
        if ($trans === "ручная") {
            $this->transmission = "ручная";
            print "Коробка передач ручная<br>\n";
        } elseif ($trans === "автоматическая") {
            print "Коробка передач автоматическая<br>".PHP_EOL;
        }
    }
    
    public function __clone()
    {
        //todo защита от клонирования
    }
    
    public function __destruct()
    {
        print "Водитель бросил машину<br>".PHP_EOL;
    }
    
}


<?php

namespace auto;

class car
{
    use engine;
    
    public function __construct($power, $transmission = "ручная")
    {
        $this->initEngine($power);
        if (!($this->enginePower > 0 && $this->enginePower < 400)) {
            exit("Установлен слишком сильный двигатель, перегрузка. Стоп<br>".PHP_EOL);
        } else {
            print "Машина готова к использованию, водитель на месте.<br>".PHP_EOL;
            $this->engineOn();
        }
    }
    
    public function __destruct()
    {
        $this->engineOff();
        print "Водитель бросил машину и ушел<br>".PHP_EOL;
    }
}

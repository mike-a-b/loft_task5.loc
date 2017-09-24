<?php

namespace Auto;
    
trait Engine
{
    public $enginePower; //кол-во лош. сил
    public $temperature;
    public $maxSpeed; //л.с  x 2
    
    public function setPower($val)
    {
        $this->enginePower = $val;
    }
    
    public function setTemperature($val)
    {
        $this->temperature = $val;
    }
    public function setMaxSpeed()
    {
        $this->maxSpeed = $this->enginePower * 2;
    }
    
    public function __construct(int $power = 35)
    {
        $this->enginePower = intval($power);
        $this->temperature = 0;
        $this->maxSpeed = $this->enginePower * 2;
        echo "У двигателя $this->enginePower л. с. машина может развить скорость $this->maxSpeed<br>".PHP_EOL;
    }
    
    public function engineOn()
    {
        print "Включается двигатель...Температура 0<br>".PHP_EOL;
    }
    
    public function engineOff()
    {
        print "Выключается двигатель...Температура $this->temperature<br>".PHP_EOL;
    }
    
    public function temperatureUp()
    {
        $this->temperature += 5;
        echo " t (двигателя) = {$this->temperature} * <br />".PHP_EOL;
        if ($this->temperature >= 90) {
            $this->temperature -= 10;
            echo "Включился вентилятор, снижена температура на 10*,  t=", $this->temperature,
            "гр<br />", PHP_EOL;
        }
    }
}

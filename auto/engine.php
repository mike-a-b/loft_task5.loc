<?php

namespace auto;
    
trait engine
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
    
    public function initEngine(int $power = 35)
    {
        $this->setPower(intval($power));
        $this->setTemperature(0);
        $this->setMaxSpeed();
        echo "У двигателя $this->enginePower л. с. машина может развить скорость $this->maxSpeed<br>".PHP_EOL;
    }
    
    public function engineOn()
    {
        print "Включается двигатель...Температура 0(*гр)<br>".PHP_EOL;
    }
    
    public function engineOff()
    {
        print "Выключается двигатель...Температура $this->temperature(*гр) <br>".PHP_EOL;
    }
    
    public function temperatureUp($val)
    {
        $val ? ($this->temperature += $val) : ($this->temperature += 5);
        print "t (двигателя) = $this->temperature(*гр) <br>".PHP_EOL;
        if ($this->temperature >= 90) {
            $this->temperature -= 10;
            print "Включился вентилятор, снижена температура на 10(*гр),  t= $this->temperature(*гр) <br>". PHP_EOL;
        }
    }
}

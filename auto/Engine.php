<?php

namespace Auto;
    
class Engine
{
    protected $enginePower; //кол-во лош. сил
    protected $temperature;
    protected $maxSpeed; //л.с  x 2
    
    
    public function __construct(int $power = 35)
    {
        $this->enginePower = $power;
        $this->temperature = 0;
        $this->maxSpeed = $this->enginePower * 2;
    }
    
    public function engineOn()
    {
        print "Включается двигатель...<br>".PHP_EOL;
    }
    
    public function engineOff()
    {
        print "Выключается двигатель...<br>".PHP_EOL;
    }
    
    
}

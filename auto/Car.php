<?php

namespace Auto;

class Car
{
    protected $engine;
    protected $transmission;

    public function __construct($engine_power, $trans = "ручная")
    {
        $engine_power ? $this->engine = new Engine(50) : $this->engine  = new Engine();
        if ($trans === "ручная") {
            $this->transmission = "ручная";
            print "Коробка передач ручная<br>\n";
        } elseif ($trans === "автоматическая") {
            print "Коробка передач автоматическая<br>\n";
        }
    }
    
    public function __clone()
    {
        //todo защита от клонирования
    }
    
    public function __destruct()
    {
        print "Машина утилизирована или продана<br>\n";
    }
    
    
}


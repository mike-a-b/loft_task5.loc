<?php

namespace Auto;

trait TransmissionManual
{
    public $direct; //направление движения
    public $gear;
    use BackMove {
        BackMove::setBackManual as setBack;
    }
    
    public function __construct()
    {
        parent:$this->__construct();
        print 'Установлена ручная коробка передач в машине<br>'.PHP_EOL;
    }
    
    public function driveUpManual($speed)
    {
        if ($this->direct === "вперед") {
            if ($speed < 20) {
                $this->setOnFirstTransmission();
            } else {
                $this->setOnSecondTransmission();
            }
            print "Машина двинулась вперед cо скоростью $speed<br>".PHP_EOL;
        }
    }
    
    public function driveBackManual($speed)
    {
        if ($this->direct === "назад") {
            $this->setBack();
            if ($speed < 20) {
                $this->setOnFirstTransmission();
            } else {
                $this->setOnSecondTransmission();
            }
            print "Машина двинулась вперед cо скоростью $speed<br>".PHP_EOL;
        }
    }
    
    private function setOnFirstTransmission()
    {
        print "Включена 1 - я передача<br>".PHP_EOL;
    }
    
    private function setOnSecondTransmission()
    {
        print "Включена 2 - я передача<br>".PHP_EOL;
    }
}

<?php

namespace Auto;

trait TransmissionAuto
{
    public $direct; //направление движения
    use BackMove {
        BackMove::setBackAuto as setBack;
    }
    
    public function __construct()
    {
        print 'Установлена автоматическая коробка передач в машине<br>'.PHP_EOL;
    }
    
    
    public function driveUpAuto($speed)
    {
        if ($this->direct === "вперед") {
            print "Машина двинулась вперед cо скоростью $speed<br>".PHP_EOL;
        }
    }
    
    public function driveBackAuto($speed)
    {
        $this->setBack();
        if ($this->direct === "назад") {
            print "Машина двинулась назад cо скоростью $speed<br>".PHP_EOL;
        }
    }
}

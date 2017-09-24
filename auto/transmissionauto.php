<?php

namespace auto;

trait transmissionauto
{
    public $direct; //направление движения
    public $auto;
    use backmove {
        backmove::setBackAuto as setBack;
    }
    
    public function setTransmissionAuto()
    {
        print 'Установлена автоматическая коробка передач в машине<br>'.PHP_EOL;
        $this->auto = true;
    }
    
    public function driveUpAuto($speed)
    {
        if ($this->auto) {
            if ($this->direct === "вперед") {
                print "Машина двинулась вперед cо скоростью $speed<br>".PHP_EOL;
            }
        }
    }
    
    public function driveBackAuto($speed)
    {
        if ($this->auto) {
            if ($this->direct === "назад") {
                $this->setBack();
                print "Машина двинулась назад cо скоростью $speed<br>".PHP_EOL;
            }
        }
    }
}

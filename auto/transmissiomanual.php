<?php

namespace auto;

trait transmissiomanual
{
    public $gear;
    public $manual;
    use backmove {
        backmove::setBackManual as setBack;
    }
    
    public function setTransmissionManual()
    {
        print 'Установлена ручная коробка передач в машине<br>'.PHP_EOL;
         $this->manual = true;
    }
    
    public function driveUpManual($speed)
    {
        if ($this->manual) {
            if ($this->direct === "вперед") {
                if ($speed < 20) {
                    $this->setOnFirstTransmission();
                } else {
                    $this->setOnSecondTransmission();
                }
                print "Машина двинулась вперед cо скоростью $speed<br>" . PHP_EOL;
            }
        } elseif ($this->auto) {
            $this->driveUpAuto($speed);
        }
    }
    
    public function driveBackManual($speed)
    {
        if ($this->manual) {
            if ($this->direct === "назад") {
                    $this->setBack();
                if ($speed < 20) {
                    $this->setOnFirstTransmission();
                } else {
                    $this->setOnSecondTransmission();
                }
                print "Машина двинулась вперед cо скоростью $speed<br>".PHP_EOL;
            }
        } elseif ($this->auto) {
            $this->driveBackAuto($speed);
        }
    }
    
    private function setOnFirstTransmission()
    {
        print "Включена 1 - я передача<br>".PHP_EOL;
        $this->gear = 1;
    }
    
    private function setOnSecondTransmission()
    {
        print "Включена 2 - я передача<br>".PHP_EOL;
        $this->gear = 2;
    }
    
    private function setNeutralTransmission()
    {
        print "Выключена коробка передач<br>".PHP_EOL;
        $this->gear = false;
    }
}

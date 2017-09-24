<?php

namespace Auto;
    
trait BackMove
{
    public function setBackAuto()
    {
        print "Включение заднего хода на автомате<br>".PHP_EOL;
    }
    public function setBackManual()
    {
        print "Включение заднего хода на ручной коробке передач<br>".PHP_EOL;
    }
}

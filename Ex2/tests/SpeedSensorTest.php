<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/SpeedSensor.php';

class SpeedSensorTest extends TestCase{
    public function testGetThreshold(){
        $sensor = new SpeedSensor();

        $this->assertEquals("Molt lent", $sensor->getThreshold(20));
        $this->assertEquals("Velocitat adequada", $sensor->getThreshold(45));
        $this->assertEquals("Excés lleu", $sensor->getThreshold(70));
        $this->assertEquals("Excés moderat", $sensor->getThreshold(90));
        $this->assertEquals("Excés greu", $sensor->getThreshold(110));

    }
}

?>
<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/SpeedSensor.php';

class SpeedSensorTest extends TestCase{
   
    public function testVerySlowBelow30() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Molt lent", $sensor->getThreshold(0));
        $this->assertEquals("Molt lent", $sensor->getThreshold(29));
    }

    
    public function testAdequateSpeedFrom30To60() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Velocitat adequada", $sensor->getThreshold(30));
        $this->assertEquals("Velocitat adequada", $sensor->getThreshold(60));
    }

   
    public function testLightExcessFrom61To80() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Excés lleu", $sensor->getThreshold(61));
        $this->assertEquals("Excés lleu", $sensor->getThreshold(80));
    }

   
    public function testModerateExcessFrom81To100() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Excés moderat", $sensor->getThreshold(81));
        $this->assertEquals("Excés moderat", $sensor->getThreshold(100));
    }

    
    public function testSevereExcessAbove100() {
        $sensor = new SpeedSensor();
        $this->assertEquals("Excés greu", $sensor->getThreshold(101));
        $this->assertEquals("Excés greu", $sensor->getThreshold(150));
    }


}

?>
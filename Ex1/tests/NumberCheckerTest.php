<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/numberChecker.php';

class NumberCheckerTest extends TestCase{
    public function testIsEven(){
        $checker1 = new NumberChecker(4); 
        $this->assertTrue($checker1->isEven());

        $checker2 = new NumberChecker(7); 
        $this->assertFalse($checker2->isEven());

        $checker3 = new NumberChecker(0); 
        $this->assertTrue($checker3->isEven());

    }

    public function testIsPositive(){
        $checker1 = new NumberChecker(5); 
        $this->assertTrue($checker1->IsPositive());

        $checker2 = new NumberChecker(-3); 
        $this->assertFalse($checker2->isPositive());

        $checker3 = new NumberChecker(0); 
        $this->assertFalse($checker3->isPositive());

    }

}





?>
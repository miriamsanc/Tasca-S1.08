<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/numberChecker.php';

class NumberCheckerTest extends TestCase{
    public function testIsEvenPositive(){
        $checker = new NumberChecker(4); 
        $this->assertTrue($checker->isEven());

    }

    public function testIsOddPositive(){
        
        $checker = new NumberChecker(7); 
        $this->assertFalse($checker->isEven());

    }

    public function testIsEvenZero(){

        $checker = new NumberChecker(0);
        $this->assertTrue($checker->isEven());
    }

    public function testEvenNegative()
    {
        $checker = new NumberChecker(-2);
        $this->assertTrue($checker->isEven());
    }

    public function testIsOddNegative(){

        $checker = new NumberChecker(-3); 
        $this->assertFalse($checker->isEven());

    }

   
    public function testPositiveZero(){

        $checker = new NumberChecker(0);
        $this->assertFalse($checker->isPositive());
    }


  public function testPositiveOdd(){
        $checker = new NumberChecker(5);
        $this->assertTrue($checker->isPositive());
    }

    public function testNegativeOdd(){
        $checker = new NumberChecker(-3);
        $this->assertFalse($checker->isPositive());
    }

    public function testNegativeEven(){
        $checker = new NumberChecker(-4);
        $this->assertFalse($checker->isPositive());
    }


}



?>
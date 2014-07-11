<?php

include_once '/var/www/jenkinsTest/Calc/src/Calculators.php';

class CalculatorsTest extends PHPUnit_Framework_TestCase
{
    public function providerAdd()
    {
        return array(
            array(1, 3, 4),
            array(1, 3, 4)
        );
    }

    /**
     * @dataProvider providerAdd
     */
    public function testAdd($intA, $intB, $intC)
    {
        $objCal = new Calculators();
        $this->assertEquals($objCal->add($intA, $intB), $intC);
    }
}

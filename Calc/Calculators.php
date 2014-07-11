<?php

/**
 *
 * User: Awlad
 * Date: 7/11/14
 * Time: 11:34 AM
 */
class Calculators
{

    public function __construct()
    {
        //sss
    }

    /**
     * add two numbers
     *
     * @param $intX
     * @param $intY
     *
     * @return int|string
     */
    public function add($intX, $intY)
    {
        if (is_int($intX) && is_int($intY)) {
            return $intX + $intY;
        } else {
            return 'Invalid Input!';
        }
    }
} 
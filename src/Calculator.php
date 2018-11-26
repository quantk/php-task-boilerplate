<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: quantick
 * Date: 26.11.2018
 * Time: 11:37
 */

namespace App;

/**
 * Class Calculator
 * @package App
 */
final class Calculator
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b)
    {
        return $a + $b;
    }
}
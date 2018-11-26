<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: quantick
 * Date: 26.11.2018
 * Time: 11:37
 */

namespace Tests;


use App\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    /**
     * @param $a
     * @param $b
     * @param $result
     * @dataProvider addProvider
     */
    public function testAdd($a, $b, $result)
    {
        static::assertSame($this->calculator->add($a, $b), $result);
    }

    public function addProvider()
    {
        return [
            [0, 0, 0],
            [1, 2, 3],
            [5, 5, 10],
            [-5, 5, 0]
        ];
    }

    protected function setUp()
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }
}
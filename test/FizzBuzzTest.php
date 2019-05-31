<?php 

namespace unit\gabi\fizzbuzz;

use gabi\fizzbuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

Class FizzBuzzTest extends TestCase
{
  public function testAnyNumberDivisibleBy3IsFizz() {
    $fizzBuzz = new FizzBuzz();

    $result = $fizzBuzz->transform("6");

    $this->assertSame("fizz", $result);
  }

  public function testAnyNumberDivisibleBy5IsBuzz() {
    $fizzBuzz = new FizzBuzz();

    $result = $fizzBuzz->transform("5");

    $this->assertSame("buzz", $result);
  }

  public function testAnyNumberDivisibleBy3And5IsFizzBuzz() {
    $fizzBuzz = new FizzBuzz();

    $result = $fizzBuzz->transform("15");

    $this->assertSame("fizzbuzz", $result);
  }

  public function testAnyNumberNonDivisibleBy3Or5StaysTheSame() {
    $fizzBuzz = new FizzBuzz();

    $result = $fizzBuzz->transform("2");

    $this->assertSame("2", $result);
  }
}

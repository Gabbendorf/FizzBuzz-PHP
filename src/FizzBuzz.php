<?php 

namespace gabi\fizzbuzz;

class FizzBuzz {
  public function transform($number)
  {
    if (!$this->isDivisibleBy(5, $number) && !$this->isDivisibleBy(3, $number)) {
      return $number;
    }

    $numberTransformed = "";
    if ($this->isDivisibleBy(3, $number)) {
      $numberTransformed .= "fizz";
    }
    if ($this->isDivisibleBy(5, $number)) {
      $numberTransformed .= "buzz";
    }
    return $numberTransformed;
  }

  private function isDivisibleBy($divisor, $numberToDivide)
  {
    return ($numberToDivide % $divisor) == 0;
  }
}

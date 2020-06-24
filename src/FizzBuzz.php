<?php

namespace Orange;

class FizzBuzz {

  public static function getAnswer($number) {
    $r = '';
    if($number%3 == 0)
      $r .= 'Fizz';
    if($number%5 == 0)
      $r .= 'Buzz';
    if(!$r)
      $r .= $number;
    return $r;
  }
}
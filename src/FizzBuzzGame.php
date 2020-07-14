<?php

namespace Orange;

class FizzBuzzGame {

  public static function getAnswer($number) {
    $r = '';
    if($number%3 == 0)
      $r .= 'Fizz';
    if($number%5 == 0)
      $r .= 'Buzz';
    if($number%7 == 0)
      $r .= 'Bar';
    if(!$r)
      $r .= $number;
    return $r;
  }
}
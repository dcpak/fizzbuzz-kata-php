<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use Orange\FizzBuzz;

require_once 'src/FizzBuzz.php';

class FizzBuzzTest extends TestCase {

  public function test___START_HERE() {
    $this->assertEquals('5', '5');
  }

  public function test_that_answer_for_1_is_1() {
    $this->assertEquals('1', FizzBuzz::getAnswer('1'));
  }

  public function test_that_answer_for_2_is_2() {
    $this->assertEquals('2', FizzBuzz::getAnswer('2'));
  }

  public function test_that_answer_for_3_is_Fizz() {
    $this->assertEquals('Fizz', FizzBuzz::getAnswer('3'));
  }

  public function test_that_answer_for_5_is_Buzz() {
    $this->assertEquals('Buzz', FizzBuzz::getAnswer('5'));
  }

  public function test_that_answer_for_6_is_Fizz() {
    $this->assertEquals('Fizz', FizzBuzz::getAnswer('6'));
  }

  public function test_that_answer_for_15_is_FizzBuzz() {
    $this->assertEquals('FizzBuzz', FizzBuzz::getAnswer('15'));
  }
}

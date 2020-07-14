<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use Orange\FizzBuzz;
use Orange\FizzBuzzGame;

require_once 'src/FizzBuzz.php';
require_once 'src/FizzBuzzGame.php';

class FizzBuzzTest extends TestCase {

  public function test_that_answer_for_1_is_1() {
    $this->assertEquals('1', FizzBuzz::getAnswer(1));
  }

  public function test_that_answer_for_2_is_2() {
    $this->assertEquals('2', FizzBuzz::getAnswer(2));
  }

  public function test_that_answer_for_7_is_Bar() {
    $this->assertEquals('Bar', FizzBuzz::getAnswer(7));
  }

  public function test_that_answer_for_3_is_Fizz() {
    $this->assertEquals('Fizz', FizzBuzz::getAnswer(3));
  }

  public function test_that_answer_for_5_is_Buzz() {
    $this->assertEquals('Buzz', FizzBuzz::getAnswer(5));
  }

  public function test_that_answer_for_6_is_Fizz() {
    $this->assertEquals('Fizz', FizzBuzz::getAnswer(6));
  }

  public function test_that_answer_for_20_is_Buzz() {
    $this->assertEquals('Buzz', FizzBuzz::getAnswer(20));
  }

  public function test_that_answer_for_21_is_FizzBar() {
    $this->assertEquals('FizzBar', FizzBuzz::getAnswer(21));
  }

  public function test_that_answer_for_15_is_FizzBuzz() {
    $this->assertEquals('FizzBuzz', FizzBuzz::getAnswer(15));
  }

  public function test_that_answer_for_15_is_FizzBuzzGame() {
    $this->assertEquals('FizzBuzz', FizzBuzzGame::getAnswer(15));
  }

}

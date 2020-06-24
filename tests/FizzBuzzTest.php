<?php

namespace tests;
use PHPUnit\Framework\TestCase;
use Orange\FizzBuzz;
require_once 'src/FizzBuzz.php';


class FizzBuzzTest extends TestCase
{

    public function test___START_HERE() {
        $this->assertEquals('5', '5');
    }

    public function test_that_answer_for_1_is_1() {
      $this->assertEquals('1', FizzBuzz::getAnswer('1'));
    }
}

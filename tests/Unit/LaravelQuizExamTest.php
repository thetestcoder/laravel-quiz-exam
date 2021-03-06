<?php

namespace TheTestCoder\LaravelQuizExam\Tests\Unit;

use TheTestCoder\LaravelQuizExam\LaravelQuizExam;
use TheTestCoder\LaravelQuizExam\Tests\TestCase;

class LaravelQuizExamTest extends TestCase
{
    /** @test */
    public function function_should_return_true()
    {
        $package = new LaravelQuizExam();
        $this->assertTrue($package->returnTrue());
    }
}

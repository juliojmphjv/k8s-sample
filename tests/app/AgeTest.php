<?php

namespace Tests\app;

use \PHPUnit\Framework\TestCase;

class AgeTest extends TestCase{
    public function testCalculateAge() {

        $today = new \DateTime();
        $dob = new \DateTime();
        $dob->setDate(1991, 10, 11);

        $age = new \App\Age($dob, $today);
        $this->assertEquals($age->calculate(), 27);
    }
}
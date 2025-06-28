<?php
use PHPUnit\Framework\TestCase;

class test extends TestCase
{
    public function testAppOutput()
    {
        $this->expectOutputString("helo from jenkin pipeline");
        include 'src/index.php';
    }
}
?>
<?php
class SparkTest extends PHPUnit_Framework_TestCase
{
    public function testSimpleLine()
    {
        $line1 = Spark::line(array(1, 2, 3, 4, 5, 6, 7, 8));
        $this->assertEquals('▁▂▃▄▅▆▇█', $line1);
    }

    public function testSimpleLineFloats()
    {
        $line1 = Spark::line(array(0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8));
        $this->assertEquals('▁▂▃▄▅▆▇█', $line1);
    }

    public function testSimpleLineTens()
    {
        $line1 = Spark::line(array(10, 20, 30, 40, 50, 60, 70, 80));
        $this->assertEquals('▁▂▃▄▅▆▇█', $line1);
    }

    public function testSimpleLineTensDecrease()
    {
        $line1 = Spark::line(array(80, 70, 60, 50, 40, 30, 20, 10));
        $this->assertEquals('█▇▆▅▄▃▂▁', $line1);
    }

    public function testSimpleLineNegativeDecrease() {
        $line1 = Spark::line(array(-1, -2, -3, -4, -5, -6, -7, -8));
        $this->assertEquals('█▇▆▅▄▃▂▁', $line1);
    }

    public function testSimpleLineAcrossZero() {
        $line1 = Spark::line(array(-4, -3, -2, -1, 0, 1, 2, 3));
        $this->assertEquals('▁▂▃▄▅▆▇█', $line1);
    }

    public function testCosWave() {
        $cos = array();
        for($i=0; $i <= 360; $i=$i+20) {
            $cos[] = cos($i * M_PI / 180);
        }
        $line1 = Spark::line($cos);
        $this->assertEquals('██▇▆▅▄▃▂▁▁▁▂▃▄▅▆▇██', $line1);
    }
}

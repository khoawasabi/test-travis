<?php

class SumTest extends PHPUnit_Framework_TestCase {
	public function testGetSum()
    {
        $this->assertEquals(3, Sum::getSum(1, 2));
    }
}
?>
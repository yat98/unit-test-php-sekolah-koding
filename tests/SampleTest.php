<?php

use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class SampleTest extends TestCase
{
	public function testIsHungry()
	{
		$isHungry = true;
		$this->assertTrue($isHungry);
	}

	/**
	 * @test
	 */
	public function isSuccess(){
		$result = true;
		$this->assertTrue($result);
	}
}

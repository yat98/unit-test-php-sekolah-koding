<?php

use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class SampleTest extends TestCase
{
	public function testAssertToTrue()
	{
		$isHungry = true;
		$this->assertTrue($isHungry);
	}
}

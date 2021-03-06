<?php
namespace SyTest;

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase {
	public function testEquals() {
		$this->assertEquals([
			'a' => 1,
			'b' => 2
		], [
			'b' => 2,
			'a' => 1
		]);
	}
	public function testEqualsTwo() {
		$this->assertEquals([
			'a' => 1,
			'b' => 2
		], [
			'b' => 1,
			'a' => 2
		]);
	}
	public function testSame() {
		$this->assertSame([
			'a' => 1,
			'b' => 2
		], [
			'b' => 2,
			'a' => 1
		]);
	}
}
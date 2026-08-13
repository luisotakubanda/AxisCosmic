<?php
/**
 * Tests for AxisCosmic
 */

use PHPUnit\Framework\TestCase;
use Axiscosmic\Axiscosmic;

class AxiscosmicTest extends TestCase {
    private Axiscosmic $instance;

    protected function setUp(): void {
        $this->instance = new Axiscosmic(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Axiscosmic::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

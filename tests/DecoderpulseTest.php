<?php
/**
 * Tests for DecoderPulse
 */

use PHPUnit\Framework\TestCase;
use Decoderpulse\Decoderpulse;

class DecoderpulseTest extends TestCase {
    private Decoderpulse $instance;

    protected function setUp(): void {
        $this->instance = new Decoderpulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Decoderpulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

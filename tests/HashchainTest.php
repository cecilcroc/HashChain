<?php
/**
 * Tests for HashChain
 */

use PHPUnit\Framework\TestCase;
use Hashchain\Hashchain;

class HashchainTest extends TestCase {
    private Hashchain $instance;

    protected function setUp(): void {
        $this->instance = new Hashchain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hashchain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

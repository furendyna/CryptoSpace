<?php
/**
 * Tests for CryptoSpace
 */

use PHPUnit\Framework\TestCase;
use Cryptospace\Cryptospace;

class CryptospaceTest extends TestCase {
    private Cryptospace $instance;

    protected function setUp(): void {
        $this->instance = new Cryptospace(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptospace::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

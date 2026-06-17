<?php
/**
 * Tests for BlockRent
 */

use PHPUnit\Framework\TestCase;
use Blockrent\Blockrent;

class BlockrentTest extends TestCase {
    private Blockrent $instance;

    protected function setUp(): void {
        $this->instance = new Blockrent(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockrent::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

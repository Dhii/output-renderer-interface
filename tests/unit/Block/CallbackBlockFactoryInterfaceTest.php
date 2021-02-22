<?php

namespace Dhii\Output\UnitTest\Block;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject as MockObject;
use Dhii\Output\Block\CallbackBlockFactoryInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.4
 */
class CallbackBlockFactoryInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.4
     *
     * @return TestSubject|MockObject
     */
    public function createInstance()
    {
        $mock = $this->getMockBuilder(TestSubject::class)
            ->getMock();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.4
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            TestSubject::class, $subject,
            'A valid instance of the test subject could not be created.'
        );
    }
}

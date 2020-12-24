<?php

namespace Dhii\Output\UnitTest;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject as MockObject;
use Dhii\Output\RendererAwareInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.1
 */
class RendererAwareInterfaceTest extends TestCase
{

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
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
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            TestSubject::class, $subject,
            'Could not create a valid instance of the test subject.'
        );
    }
}

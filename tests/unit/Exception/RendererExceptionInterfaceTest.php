<?php

namespace Dhii\Output\UnitTest\Exception;

use Dhii\Output\Test\GetImplementingMockBuilderCapableTrait;
use Dhii\Output\Exception\RendererExceptionInterface as TestSubject;
use PHPUnit\Framework\MockObject\MockObject as MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.1
 */
class RendererExceptionInterfaceTest extends TestCase
{
    use GetImplementingMockBuilderCapableTrait;

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return TestSubject|MockObject
     */
    public function createInstance()
    {
        $mock = $this->getImplementingMockBuilder('Exception', [TestSubject::class])
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

        $this->assertInstanceOf(
            'Dhii\Output\RendererAwareInterface', $subject,
            'Subject does not extend expected parent interface'
        );

        $this->assertInstanceOf(
            'Throwable', $subject,
            'Subject does not extend expected parent interface'
        );
    }
}

<?php

namespace Dhii\Output\UnitTest\Exception;

use Dhii\Output\Exception\TemplateRenderExceptionInterface as TestSubject;
use Dhii\Output\Test\GetImplementingMockBuilderCapableTrait;
use PHPUnit\Framework\MockObject\MockObject as MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.2
 */
class TemplateRenderExceptionInterfaceTest extends TestCase
{
    use GetImplementingMockBuilderCapableTrait;

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
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
     * @since 0.2
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            TestSubject::class, $subject,
            'Could not create a valid instance of the test subject.'
        );

        $this->assertInstanceOf(
            'Dhii\Output\Exception\CouldNotRenderExceptionInterface', $subject,
            'Subject does not extend expected parent interface'
        );
    }
}

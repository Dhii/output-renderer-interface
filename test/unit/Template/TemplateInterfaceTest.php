<?php

namespace Dhii\Output\UnitTest\Template;

use Dhii\Output\Template\TemplateInterface as TestSubject;
use PHPUnit_Framework_MockObject_MockObject as MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.4
 */
class TemplateInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.4
     *
     * @return TestSubject|MockObject A new instance of the test subject.
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
            'Could not create a valid instance of the test subject.'
        );
    }
}

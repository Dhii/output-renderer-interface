<?php

namespace Dhii\Output\Exception\UnitTest;

use Dhii\Output\Exception\RenderCapableAwareExceptionInterface as TestSubject;
use Xpmock\TestCase;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.1
 */
class RenderCapableAwareExceptionInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Output\Exception\RenderCapableAwareExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                 ->getRenderCapable()
                // ThrowableInterface
                ->getMessage()
                ->getCode()
                ->getFile()
                ->getLine()
                ->getTrace()
                ->getTraceAsString()
                ->getPrevious()
                ->__toString();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject,
            'Could not create a valid instance of the test subject.'
        );

        $this->assertInstanceOf(
            'Dhii\Output\RenderCapableAwareInterface', $subject,
            'Subject does not extend expected parent interface'
        );

        $this->assertInstanceOf(
            'Dhii\Exception\ThrowableInterface', $subject,
            'Subject does not extend expected parent interface'
        );
    }
}

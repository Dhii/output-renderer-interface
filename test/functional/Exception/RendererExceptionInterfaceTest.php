<?php

namespace Dhii\Output\Exception\FuncTest;

use Dhii\Output\Exception\RendererExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Output\Exception\RendererExceptionInterface}.
 *
 * @since 0.1
 */
class RendererExceptionInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Output\Exception\RendererExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return RendererExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                 ->getRenderer()
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
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject,
            'Could not create a valid instance of the test subject.'
        );

        $this->assertInstanceOf(
            'Dhii\Output\RendererAwareInterface', $subject,
            'Subject does not extend expected parent interface'
        );
    }
}

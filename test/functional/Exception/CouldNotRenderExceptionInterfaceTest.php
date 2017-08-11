<?php

namespace Dhii\Output\Exception\FuncTest;

use Dhii\Output\Exception\CouldNotRenderExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Output\Exception\CouldNotRenderExceptionInterface}.
 *
 * @since [*next-version*]
 */
class CouldNotRenderExceptionInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Output\Exception\CouldNotRenderExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return CouldNotRenderExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->getRenderer();

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
            'Subject is not a valid instance'
        );

        $this->assertInstanceOf(
            'Dhii\Output\Exception\RendererExceptionInterface', $subject,
            'Subject does not extend expected parent interface'
        );

        $this->assertInstanceOf(
            'Dhii\Output\RendererAwareInterface', $subject,
            'Subject does not extend expected parent interface'
        );
    }
}

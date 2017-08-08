<?php

namespace Dhii\Output\FuncTest;

use Dhii\Output\RendererInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Output\RendererInterface}.
 *
 * @since [*next-version*]
 */
class RendererInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Output\RendererInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return RendererInterface A new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->render()
            ->new();

        return $mock;
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
    }
}

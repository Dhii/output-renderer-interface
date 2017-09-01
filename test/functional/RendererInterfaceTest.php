<?php

namespace Dhii\Output\FuncTest;

use Dhii\Output\RendererInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Output\RendererInterface}.
 *
 * @since 0.1
 */
class RendererInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Output\RendererInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
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
     * @since 0.1
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

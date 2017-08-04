<?php

namespace Dhii\Output\FuncTest;

use Dhii\Output\RendererInterface;

/**
 * Tests {@see \Dhii\Output\RendererInterface}.
 *
 * @since [*next-version*]
 */
class RendererInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return RendererInterface A new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\Output\\RendererInterface')
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
            'Dhii\\Output\\RendererInterface', $subject,
            'Could not create a valid instance of the test subject.'
        );
    }
}

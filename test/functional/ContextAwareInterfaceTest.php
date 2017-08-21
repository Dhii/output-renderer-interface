<?php

namespace Dhii\Output\FuncTest;

use Dhii\Output\ContextAwareInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Output\ContextAwareInterface}.
 *
 * @since [*next-version*]
 */
class ContextAwareInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Output\ContextAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ContextAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->getContext()
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
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'Could not create a valid instance of the test subject.'
        );
    }
}

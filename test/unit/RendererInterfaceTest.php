<?php

namespace Dhii\Output\UnitTest;

use Dhii\Output\RendererInterface as TestSubject;
use Xpmock\TestCase;

/**
 * Tests {@see TestSubject}.
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
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->render();

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
    }
}

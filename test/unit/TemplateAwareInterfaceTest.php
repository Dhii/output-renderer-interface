<?php

namespace Dhii\Output\UnitTest;

use Xpmock\TestCase;
use Dhii\Output\TemplateAwareInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.2
 */
class TemplateAwareInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.2
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Output\TemplateAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->getTemplate();

        return $mock->new();
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
            static::TEST_SUBJECT_CLASSNAME, $subject,
            'Could not create a valid instance of the test subject.'
        );
    }
}

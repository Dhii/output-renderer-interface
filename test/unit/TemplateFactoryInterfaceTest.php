<?php

namespace Dhii\Output\UnitTest;

use Dhii\Output\TemplateFactoryInterface as TestSubject;
use Xpmock\TestCase;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class TemplateFactoryInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Output\TemplateFactoryInterface';

    /**
     * The name of the class that represents a generic factory.
     *
     * @since [*next-version*]
     */
    const FACTORY_BASE_FQN = 'Dhii\Factory\FactoryInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject A new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->make()
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
        $this->assertInstanceOf(
            static::FACTORY_BASE_FQN, $subject,
            'Subject does not implement required interface.'
        );
    }

    /**
     * Tests that the subject has all the required constants.
     *
     * @since [*next-version*]
     */
    public function testConstants()
    {
        $this->assertTrue(defined(vsprintf('%1$s::%2$s', array(static::TEST_SUBJECT_CLASSNAME, 'K_TEMPLATE'))), 'Subject does not have a required constant');
    }
}

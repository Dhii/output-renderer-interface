<?php

namespace Dhii\Output\UnitTest;

use Dhii\Output\BlockFactoryInterface as TestSubject;
use Xpmock\TestCase;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.3
 */
class BlockFactoryInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.3
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Output\BlockFactoryInterface';

    /**
     * The name of the class that represents a generic factory.
     *
     * @since 0.3
     */
    const FACTORY_BASE_FQN = 'Dhii\Factory\FactoryInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.3
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
     * @since 0.3
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
     * @since 0.3
     */
    public function testConstants()
    {
        $this->assertTrue(defined(vsprintf('%1$s::%2$s', array(static::TEST_SUBJECT_CLASSNAME, 'K_CONTENT'))), 'Subject does not have a required constant');
    }
}

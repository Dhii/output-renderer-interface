<?php

namespace Dhii\Output\UnitTest;

use Dhii\Output\BlockInterface as TestSubject;
use Xpmock\TestCase;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.1
 */
class BlockInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Output\\BlockInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @param string $output
     *
     * @return TestSubject
     */
    public function createInstance($output = '')
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->render()
                ->__toString($output)
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
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'Subject is not a valid instance.'
        );

        $this->assertInstanceOf(
            'Dhii\Util\String\StringableInterface',
            $subject,
            'Subject does not implement required interface'
        );

        $this->assertInstanceOf(
            'Dhii\Output\RendererInterface',
            $subject,
            'Subject does not implement required interface'
        );
    }

    /**
     * Tests whether the block can be cast into a string.
     *
     * @since 0.1
     */
    public function testCanBeCastToString()
    {
        $expected = 'foobar';
        $subject = $this->createInstance($expected);
        $string = (string) $subject;

        $this->assertEquals($expected, $string, 'Subject did not render correctly.');
    }
}
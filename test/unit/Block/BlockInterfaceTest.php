<?php

namespace Dhii\Output\UnitTest\Block;

use Dhii\Output\Block\BlockInterface as TestSubject;
use PHPUnit_Framework_MockObject_MockObject as MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.4
 */
class BlockInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.4
     *
     * @param string $output
     *
     * @return TestSubject|MockObject
     */
    public function createInstance($output = '')
    {
        $mock = $this->getMockBuilder(TestSubject::class)
            ->setMethods([]) // all
            ->getMock();

        $mock->method('__toString')
            ->will($this->returnValue($output));

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.4
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            TestSubject::class,
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
     * @since 0.4
     */
    public function testCanBeCastToString()
    {
        $expected = 'foobar';
        $subject = $this->createInstance($expected);
        $string = (string) $subject;

        $this->assertEquals($expected, $string, 'Subject did not render correctly.');
    }
}

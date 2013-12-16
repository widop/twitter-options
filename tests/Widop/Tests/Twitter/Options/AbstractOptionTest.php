<?php

/*
 * This file is part of the Wid'op package.
 *
 * (c) Wid'op <contact@widop.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Widop\Tests\Twitter\Options;

use Widop\Twitter\Options\AbstractOption;
/**
 * Abstract option test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class AbstractOptionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\AbstractOption */
    private $option;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->option = $this->getMockForAbstractClass('Widop\Twitter\Options\AbstractOption');
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->option);
    }

    public function testDefaultState()
    {
        $this->assertInstanceOf('Widop\Twitter\Options\OptionInterface', $this->option);
        $this->assertSame(AbstractOption::TYPE_GET, $this->option->getType());
        $this->assertFalse($this->option->hasValue());
        $this->assertNull($this->option->getValue());
    }

    public function testInitialState()
    {
        $this->option = $this->getMockBuilder('Widop\Twitter\Options\AbstractOption')
            ->setConstructorArgs(array(AbstractOption::TYPE_POST))
            ->getMockForAbstractClass();

        $this->assertSame(AbstractOption::TYPE_POST, $this->option->getType());
    }

    public function testValue()
    {
        $this->option->setValue('foo');

        $this->assertTrue($this->option->hasValue());
        $this->assertSame('foo', $this->option->getValue());
    }
}

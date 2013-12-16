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
use Widop\Twitter\Options\OptionBag;

/**
 * Option bag test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class OptionBagTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\OptionBag */
    private $optionBag;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->optionBag = new OptionBag();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->optionBag);
    }

    public function testRegisterWithString()
    {
        $this->optionBag->register('accuracy');

        $options = iterator_to_array($this->optionBag);

        $this->assertArrayHasKey('accuracy', $options);
        $this->assertSame($options['accuracy']->getType(), AbstractOption::TYPE_GET);
    }

    public function testRegisterWithOption()
    {
        $option = $this->getMock('Widop\Twitter\Options\OptionInterface');
        $option
            ->expects($this->any())
            ->method('getName')
            ->will($this->returnValue('foo'));

        $this->optionBag->register($option);

        $options = iterator_to_array($this->optionBag);

        $this->assertArrayHasKey('foo', $options);
        $this->assertSame($options['foo'], $option);
    }

    public function testRegisterWithDefaultType()
    {
        $this->optionBag->register('accuracy');

        $options = iterator_to_array($this->optionBag);

        $this->assertArrayHasKey('accuracy', $options);
        $this->assertSame($options['accuracy']->getType(), AbstractOption::TYPE_GET);
    }

    public function testRegisterWithCustomType()
    {
        $this->optionBag->register('accuracy', AbstractOption::TYPE_POST);

        $options = iterator_to_array($this->optionBag);

        $this->assertArrayHasKey('accuracy', $options);
        $this->assertSame($options['accuracy']->getType(), AbstractOption::TYPE_POST);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The option "foo" does not exist.
     */
    public function testRegisterWithInvalidValue()
    {
        $this->optionBag->register('foo');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The option should be either a string or a "Widop\Twitter\Options\OptionInterface".
     */
    public function testRegisterWithInvalidType()
    {
        $this->optionBag->register(array());
    }

    public function testArrayAccess()
    {
        $this->optionBag->register('accuracy');

        $this->assertFalse(isset($this->optionBag['accuracy']));
        $this->assertNull($this->optionBag['accuracy']);

        $this->optionBag['accuracy'] = 'foo';

        $this->assertTrue(isset($this->optionBag['accuracy']));
        $this->assertSame('foo', $this->optionBag['accuracy']);

        unset($this->optionBag['accuracy']);

        $this->assertFalse(isset($this->optionBag['accuracy']));
        $this->assertNull($this->optionBag['accuracy']);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The option "foo" does not exist.
     */
    public function testArrayAccessWithInvalidValue()
    {
        $this->optionBag['foo'];
    }
}

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

use Widop\Twitter\Options\OptionBagFactory;

/**
 * Option factory test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class OptionBagFactoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\OptionBagFactory */
    private $optionBagFactory;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->optionBagFactory = new OptionBagFactory();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->optionBagFactory);
    }

    public function testCreate()
    {
        $optionBag = $this->optionBagFactory->create();
        $this->assertInstanceOf('Widop\Twitter\Options\OptionBag', $optionBag);
        $this->assertInstanceOf('Widop\Twitter\Options\OptionBagInterface', $optionBag);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The class "Widop\Twitter\Options\OptionFactory" does not implement the required interface.
     */
    public function testCreateWithNonImplementingClass()
    {
        new OptionBagFactory('Widop\Twitter\Options\OptionFactory');
    }
}

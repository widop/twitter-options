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

use Widop\Twitter\Options\OptionFactory;

/**
 * Option factory test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class OptionFactoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\OptionFactory */
    private $optionFactory;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->optionFactory = new OptionFactory();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->optionFactory);
    }

    public function testCreate()
    {
        $this->assertInstanceOf('Widop\Twitter\Options\AccuracyOption', $this->optionFactory->create('accuracy'));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The option "foo" does not exist.
     */
    public function testCreateWithUnknownOption()
    {
        $this->optionFactory->create('foo');
    }
}

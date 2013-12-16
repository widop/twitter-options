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

/**
 * Abstract boolean option test.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class AbstractBooleanOptionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\AbstractBooleanOption */
    private $booleanOption;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->booleanOption = $this->getMockForAbstractClass('Widop\Twitter\Options\AbstractBooleanOption');
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->booleanOption);
    }

    public function testDefaultState()
    {
        $this->assertInstanceOf('Widop\Twitter\Options\AbstractOption', $this->booleanOption);
    }

    public function testNormalizedValueWithTrueValue()
    {
        $this->booleanOption->setValue(true);

        $this->assertSame('true', $this->booleanOption->getNormalizedValue());
    }

    public function testNormalizedValueWithFalseValue()
    {
        $this->booleanOption->setValue(false);

        $this->assertSame('false', $this->booleanOption->getNormalizedValue());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The option "foo" only accepts boolean value.
     */
    public function testSetValueWithInvalidValue()
    {
        $this->booleanOption
            ->expects($this->once())
            ->method('getName')
            ->will($this->returnValue('foo'));

        $this->booleanOption->setValue('bar');
    }
}

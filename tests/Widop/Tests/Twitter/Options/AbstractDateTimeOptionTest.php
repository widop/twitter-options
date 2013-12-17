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
class AbstractDateTimeOptionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\AbstractDateTimeOption */
    private $dateTimeOption;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->dateTimeOption = $this->getMockForAbstractClass('Widop\Twitter\Options\AbstractDateTimeOption');
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->dateTimeOption);
    }

    public function testDefaultState()
    {
        $this->assertInstanceOf('Widop\Twitter\Options\AbstractOption', $this->dateTimeOption);
    }

    public function testNormalizedValueWithString()
    {
        $date = '2013-12-10';
        $this->dateTimeOption->setValue($date);

        $this->assertSame($date, $this->dateTimeOption->getNormalizedValue());
    }

    public function testNormalizedValueWithDateTime()
    {
        $date = '2013-12-10';
        $this->dateTimeOption->setValue(new \DateTime($date));

        $this->assertSame($date, $this->dateTimeOption->getNormalizedValue());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Failed to parse time string (bar)
     */
    public function testSetValueWithInvalidValue()
    {
        $this->dateTimeOption->setValue('bar');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The option "foo" only accepts \DateTime objects or strings.
     */
    public function testSetValueWithInvalidType()
    {
        $this->dateTimeOption
            ->expects($this->once())
            ->method('getName')
            ->will($this->returnValue('foo'));

        $this->dateTimeOption->setValue(new \stdClass());
    }
}

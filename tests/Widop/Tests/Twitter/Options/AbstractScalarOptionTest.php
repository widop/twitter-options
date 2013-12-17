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
 * Abstract scalar option test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class AbstractScalarOptionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\AbstractScalarOption */
    private $scalarOption;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->scalarOption = $this->getMockForAbstractClass('Widop\Twitter\Options\AbstractScalarOption');
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->scalarOption);
    }

    public function testNormalizedValue()
    {
        $this->scalarOption->setValue(10);

        $this->assertSame('10', $this->scalarOption->getNormalizedValue());
    }
}

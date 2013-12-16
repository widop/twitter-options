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

use Widop\Twitter\Options\StartSleepTimeOption;

/**
 * Start sleep time option test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class StartSleepTimeOptionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\StartSleepTimeOption */
    private $option;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->option = new StartSleepTimeOption();
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
        $this->assertInstanceOf('Widop\Twitter\Options\AbstractScalarOption', $this->option);
        $this->assertSame('start_sleep_time', $this->option->getName());
    }
}

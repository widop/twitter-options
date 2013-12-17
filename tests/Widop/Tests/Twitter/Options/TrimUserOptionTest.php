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

use Widop\Twitter\Options\TrimUserOption;

/**
 * Trim user option test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class TrimUserOptionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\TrimUserOption */
    private $option;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->option = new TrimUserOption();
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
        $this->assertInstanceOf('Widop\Twitter\Options\AbstractBooleanOption', $this->option);
        $this->assertSame('trim_user', $this->option->getName());
    }
}

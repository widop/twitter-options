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

use Widop\Twitter\Options\SourceScreenNameOption;

/**
 * Source screen name option test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class SourceScreenNameOptionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\SourceScreenNameOption*/
    private $option;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->option = new SourceScreenNameOption();
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
        $this->assertSame('source_screen_name', $this->option->getName());
    }
}

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

use Widop\Twitter\Options\ProfileSidebarBorderColorOption;

/**
 * Profile sidebar border color option test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class ProfileSidebarBorderColorOptionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\ProfileSidebarBorderColorOption */
    private $option;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->option = new ProfileSidebarBorderColorOption();
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
        $this->assertSame('profile_sidebar_border_color', $this->option->getName());
    }
}

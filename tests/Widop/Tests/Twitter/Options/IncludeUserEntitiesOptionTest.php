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

use Widop\Twitter\Options\IncludeUserEntitiesOption;

/**
 * Include user entities option test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class IncludeUserEntitiesOptionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Widop\Twitter\Options\IncludeUserEntitiesOption */
    private $option;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->option = new IncludeUserEntitiesOption();
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
        $this->assertSame('include_user_entities', $this->option->getName());
    }
}

<?php

/*
 * This file is part of the Wid'op package.
 *
 * (c) Wid'op <contact@widop.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Widop\Twitter\Options;

use Widop\Twitter\Options\OptionInterface;

interface OptionFactoryInterface
{
    /**
     * Creates an option.
     *
     * @param string $option The option name.
     * @param string $type   The option type.
     *
     * @throws \InvalidArgumentException If the option does not exist.
     *
     * @return \Widop\Twitter\Options\OptionInterface The option.
     */
    public function create($option, $type = OptionInterface::TYPE_GET);
}

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

interface OptionBagInterface extends \ArrayAccess, \IteratorAggregate
{

    /**
     * Registers an option.
     *
     * @param string|\Widop\Twitter\Options\OptionInterface $option The option.
     * @param string                                        $type   The option type.
     *
     * @throws \InvalidArgumentException If the option is not valid.
     *
     * @return \Widop\Twitter\Options\OptionBag The option bag.
     */
    public function register($option, $type = OptionInterface::TYPE_GET);
}

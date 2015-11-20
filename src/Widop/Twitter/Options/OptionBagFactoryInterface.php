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

interface OptionBagFactoryInterface
{
    /**
     * Creates an option bag.
     *
     * @param \Widop\Twitter\Options\OptionFactoryInterface A factory that creates options.
     *
     * @return \Widop\Twitter\Options\OptionBagInterface The option bag.
     */
    public function create(OptionFactoryInterface $factory = null);
}

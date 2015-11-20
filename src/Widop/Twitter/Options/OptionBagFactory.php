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

class OptionBagFactory implements OptionBagFactoryInterface
{
    /** @var string */
    private $class;

    /**
     * Creates an option bag factory.
     *
     * @param string $class A fully-qualified classname that implements OptionBagInterface
     *
     * @throws \InvalidArgumentException If the supplied classname does not implement OptionBagInterface
     */
    public function __construct($class = "Widop\\Twitter\\Options\\OptionBag")
    {
        if (!in_array("Widop\\Twitter\\Options\\OptionBagInterface", class_implements($class))) {
            throw new \InvalidArgumentException(sprintf('The class "%s" does not implement the required interface.', $class));
        }

        $this->class = $class;
    }

    /**
     * Creates an option bag.
     *
     * @param \Widop\Twitter\Options\OptionFactoryInterface A factory that creates options.
     *
     * @return \Widop\Twitter\Options\OptionBagInterface The option bag.
     */
    public function create(OptionFactoryInterface $factory = null)
    {
        $class = $this->class;
        return new $class($factory);
    }
}

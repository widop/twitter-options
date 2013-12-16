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

/**
 * Status option.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class StatusOption extends AbstractScalarOption
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'status';
    }
}
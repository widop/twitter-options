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
 * Source screen name option.
 *
 * @author Geoffrey Brier <geoffrey.brier@gmail.com>
 */
class SourceScreenNameOption extends AbstractScalarOption
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'source_screen_name';
    }
}

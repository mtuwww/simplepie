<?php

// SPDX-FileCopyrightText: 2004-2023 Ryan Parman, Sam Sneddon, Ryan McCue
// SPDX-License-Identifier: BSD-3-Clause

declare(strict_types=1);

use SimplePie\Cache\Memcache;

class_exists('SimplePie\Cache\Memcache');

// @trigger_error(sprintf('Using the "SimplePie_Cache_Memcache" class is deprecated since SimplePie 1.7.0, use "SimplePie\Cache\Memcache" instead.'), \E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since SimplePie 1.7.0, use "SimplePie\Cache\Memcache" instead */
    class SimplePie_Cache_Memcache extends Memcache
    {
    }
}

<?php

// SPDX-FileCopyrightText: 2004-2023 Ryan Parman, Sam Sneddon, Ryan McCue
// SPDX-License-Identifier: BSD-3-Clause

declare(strict_types=1);

use SimplePie\Credit;

class_exists('SimplePie\Credit');

// @trigger_error(sprintf('Using the "SimplePie_Credit" class is deprecated since SimplePie 1.7.0, use "SimplePie\Credit" instead.'), \E_USER_DEPRECATED);

if (\false) {
    /** @deprecated since SimplePie 1.7.0, use "SimplePie\Credit" instead */
    class SimplePie_Credit extends Credit
    {
    }
}

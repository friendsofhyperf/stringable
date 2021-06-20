<?php

declare(strict_types=1);
/**
 * This file is part of stringable.
 *
 * @link     https://github.com/friendsofhyperf/stringable
 * @document https://github.com/friendsofhyperf/stringable/blob/main/README.md
 * @contact  huangdijia@gmail.com
 */
if (! function_exists('string')) {
    /**
     * @param string $value
     * @return \FriendsOfHyperf\Stringable\Stringable
     */
    function string($value)
    {
        return new \FriendsOfHyperf\Stringable\Stringable($value);
    }
}

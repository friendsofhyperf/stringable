<?php

declare(strict_types=1);
/**
 * This file is part of stringable.
 *
 * @link     https://github.com/friendsofhyperf/stringable
 * @document https://github.com/friendsofhyperf/stringable/blob/main/README.md
 * @contact  huangdijia@gmail.com
 */
namespace Hyperf\Utils {
    use FriendsOfHyperf\Stringable\Stringable;

    class Str
    {
        public function of($value): Stringable
        {
            return new Stringable($value);
        }
    }
}

namespace {
}

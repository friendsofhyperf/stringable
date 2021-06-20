<?php

declare(strict_types=1);
/**
 * This file is part of stringable.
 *
 * @link     https://github.com/friendsofhyperf/stringable
 * @document https://github.com/friendsofhyperf/stringable/blob/main/README.md
 * @contact  huangdijia@gmail.com
 */
namespace FriendsOfHyperf\Stringable;

use Hyperf\Utils\Str;

class ConfigProvider
{
    public function __invoke(): array
    {
        defined('BASE_PATH') or define('BASE_PATH', '');

        if (! Str::hasMacro('of')) {
            Str::macro('of', function ($value) {
                return new Stringable((string) $value);
            });
        }

        return [
            'dependencies' => [],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'commands' => [],
            'listeners' => [],
            'publish' => [],
        ];
    }
}

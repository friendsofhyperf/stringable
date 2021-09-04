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
use League\CommonMark\GithubFlavoredMarkdownConverter;
use voku\helper\ASCII;

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

        if (! Str::hasMacro('isAscii')) {
            Str::macro('isAscii', function ($value) {
                return ASCII::is_ascii((string) $value);
            });
        }

        if (! Str::hasMacro('afterLast')) {
            Str::macro('afterLast', function ($subject, $search) {
                if ($search === '') {
                    return $subject;
                }

                $position = strrpos($subject, (string) $search);

                if ($position === false) {
                    return $subject;
                }

                return substr($subject, $position + strlen($search));
            });
        }

        if (! Str::hasMacro('beforeLast')) {
            Str::macro('beforeLast', function ($subject, $search) {
                if ($search === '') {
                    return $subject;
                }

                $pos = mb_strrpos($subject, $search);

                if ($pos === false) {
                    return $subject;
                }

                return Str::substr($subject, 0, $pos);
            });
        }

        if (! Str::hasMacro('between')) {
            Str::macro('between', function ($subject, $from, $to) {
                if ($from === '' || $to === '') {
                    return $subject;
                }

                return Str::beforeLast(Str::after($subject, $from), $to);
            });
        }

        if (! Str::hasMacro('containsAll')) {
            Str::macro('containsAll', function ($haystack, array $needles) {
                foreach ($needles as $needle) {
                    if (! Str::contains($haystack, $needle)) {
                        return false;
                    }
                }

                return true;
            });
        }

        if (! Str::hasMacro('markdown')) {
            Str::macro('markdown', function ($string, array $options = []) {
                $converter = new GithubFlavoredMarkdownConverter($options);

                return (string) $converter->convertToHtml($string);
            });
        }

        if (! Str::hasMacro('padBoth')) {
            Str::macro('padBoth', function ($value, $length, $pad = ' ') {
                return str_pad($value, $length, $pad, STR_PAD_BOTH);
            });
        }

        if (! Str::hasMacro('padLeft')) {
            Str::macro('padLeft', function ($value, $length, $pad = ' ') {
                return str_pad($value, $length, $pad, STR_PAD_LEFT);
            });
        }

        if (! Str::hasMacro('padRight')) {
            Str::macro('padRight', function ($value, $length, $pad = ' ') {
                return str_pad($value, $length, $pad, STR_PAD_RIGHT);
            });
        }

        if (! Str::hasMacro('remove')) {
            Str::macro('remove', function ($search, $subject, $caseSensitive = true) {
                return $caseSensitive
                            ? str_replace($search, '', $subject)
                            : str_ireplace($search, '', $subject);
            });
        }

        if (! Str::hasMacro('repeat')) {
            Str::macro('repeat', function (string $string, int $times) {
                return str_repeat($string, $times);
            });
        }

        if (! Str::hasMacro('replace')) {
            Str::macro('replace', function ($search, $replace, $subject) {
                return str_replace($search, $replace, $subject);
            });
        }

        if (! Str::hasMacro('substrCount')) {
            Str::macro('substrCount', function ($haystack, $needle, $offset = 0, $length = null) {
                if (! is_null($length)) {
                    return substr_count($haystack, $needle, $offset, $length);
                }
                return substr_count($haystack, $needle, $offset);
            });
        }

        if (! Str::hasMacro('isUuid')) {
            Str::macro('isUuid', function ($value) {
                if (! is_string($value)) {
                    return false;
                }

                return preg_match('/^[\da-f]{8}-[\da-f]{4}-[\da-f]{4}-[\da-f]{4}-[\da-f]{12}$/iD', $value) > 0;
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

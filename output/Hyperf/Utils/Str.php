<?php

declare(strict_types=1);
/**
 * This file is part of stringable.
 *
 * @link     https://github.com/friendsofhyperf/stringable
 * @document https://github.com/friendsofhyperf/stringable/blob/main/README.md
 * @contact  huangdijia@gmail.com
 */
namespace Hyperf\Utils;

use FriendsOfHyperf\Stringable\Stringable;

class Str
{
    /**
     * @param string $value
     * @return Stringable
     */
    public static function of($value)
    {
    }

    /**
     * @param string $subject
     * @param string $search
     * @return string
     */
    public static function afterLast($subject, $search)
    {
    }

    /**
     * Get the portion of a string before the last occurrence of a given value.
     *
     * @param string $subject
     * @param string $search
     * @return string
     */
    public static function beforeLast($subject, $search)
    {
    }

    /**
     * Get the portion of a string between two given values.
     *
     * @param string $subject
     * @param string $from
     * @param string $to
     * @return string
     */
    public static function between($subject, $from, $to)
    {
    }

    /**
     * Determine if a given string contains all array values.
     *
     * @param string $haystack
     * @param string[] $needles
     * @return bool
     */
    public static function containsAll($haystack, array $needles)
    {
    }

    /**
     * Converts GitHub flavored Markdown into HTML.
     *
     * @param string $string
     * @return string
     */
    public static function markdown($string, array $options = [])
    {
    }

    /**
     * Pad both sides of a string with another.
     *
     * @param string $value
     * @param int $length
     * @param string $pad
     * @return string
     */
    public static function padBoth($value, $length, $pad = ' ')
    {
    }

    /**
     * Pad the left side of a string with another.
     *
     * @param string $value
     * @param int $length
     * @param string $pad
     * @return string
     */
    public static function padLeft($value, $length, $pad = ' ')
    {
    }

    /**
     * Pad the right side of a string with another.
     *
     * @param string $value
     * @param int $length
     * @param string $pad
     * @return string
     */
    public static function padRight($value, $length, $pad = ' ')
    {
    }

    /**
     * Remove any occurrence of the given string in the subject.
     *
     * @param array<string>|string $search
     * @param string $subject
     * @param bool $caseSensitive
     * @return string
     */
    public static function remove($search, $subject, $caseSensitive = true)
    {
    }

    /**
     * Repeat the given string.
     *
     * @return string
     */
    public static function repeat(string $string, int $times)
    {
    }

    /**
     * Replace the given value in the given string.
     *
     * @param string|string[] $search
     * @param string|string[] $replace
     * @param string|string[] $subject
     * @return string
     */
    public static function replace($search, $replace, $subject)
    {
    }

    /**
     * Returns the number of substring occurrences.
     *
     * @param string $haystack
     * @param string $needle
     * @param int $offset
     * @param null|int $length
     * @return int
     */
    public static function substrCount($haystack, $needle, $offset = 0, $length = null)
    {
    }

    /**
     * @param string $value
     * @return bool
     */
    public static function isAscii($value)
    {
    }
}

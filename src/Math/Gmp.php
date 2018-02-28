<?php

/*
 * This file is part of Hashids.
 *
 * (c) Ivan Akimov <ivan@barreleye.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Hashids\Math;

/**
 * This is the Gmp math class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 * @author Jakub Kramarz <lenwe@lenwe.net>
 * @author Johnson Page <jwpage@gmail.com>
 */
class Gmp implements MathInterface
{
    /**
     * Add two arbitrary-length integers.
     *
     * @param string $a
     * @param string $b
     *
     * @return string
     */
    public function add(string $a, string $b): string
    {
        return gmp_add($a, $b);
    }

    /**
     * Multiply two arbitrary-length integers.
     *
     * @param string $a
     * @param string $b
     *
     * @return string
     */
    public function multiply(string $a, string $b): string
    {
        return gmp_mul($a, $b);
    }

    /**
     * Divide two arbitrary-length integers.
     *
     * @param string $a
     * @param string $b
     *
     * @return string
     */
    public function divide(string $a, string $b): string
    {
        return gmp_div_q($a, $b);
    }

    /**
     * Compute arbitrary-length integer modulo.
     *
     * @param string $n
     * @param string $d
     *
     * @return string
     */
    public function mod(string $n, string $d): string
    {
        return gmp_mod($n, $d);
    }

    /**
     * Compares two arbitrary-length integers.
     *
     * @param string $a
     * @param string $b
     *
     * @return bool
     */
    public function greaterThan(string $a, string $b): bool
    {
        return gmp_cmp($a, $b) > 0;
    }

    /**
     * Converts arbitrary-length integer to PHP integer.
     *
     * @param string $a
     *
     * @return int
     */
    public function intval(string $a): int
    {
        return gmp_intval($a);
    }

    /**
     * Converts arbitrary-length integer to PHP string.
     *
     * @param string $a
     *
     * @return string
     */
    public function strval(string $a): string
    {
        return gmp_strval($a);
    }

    /**
     * Converts PHP integer to arbitrary-length integer.
     *
     * @param int $a
     *
     * @return int
     */
    public function get(int $a): int
    {
        return gmp_init($a);
    }
}

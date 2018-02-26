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

namespace Hashids;

/**
 * This is the hashids interface.
 *
 * @author Ivan Akimov <ivan@barreleye.com>
 * @author Vincent Klaiber <hello@vinkla.com>
 */
interface HashidsInterface
{
    /**
     * Encode parameters to generate a hash.
     *
     * @param mixed $numbers
     *
     * @return string
     */
    public function encode(...$numbers): string;

    /**
     * Decode a hash to the original parameter values.
     *
     * @param string $hash
     *
     * @return array
     */
    public function decode(string $hash): array;

    /**
     * Encode hexadecimal values and generate a hash string.
     *
     * @param string $str
     *
     * @return string
     */
    public function encodeHex(string $str): string;

    /**
     * Decode a hexadecimal hash.
     *
     * @param string $hash
     *
     * @return string
     */
    public function decodeHex(string $hash): string;
}

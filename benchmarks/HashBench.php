<?php

/*
 * This file is part of the PHPBench package
 *
 * (c) Daniel Leech <daniel@dantleech.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @Revs({1, 10, 100, 1000})
 * @Iterations(10)
 * @Groups({"hashing"})
 */
class HashingBenchmark
{
    public function benchMd5()
    {
        hash('md5', 'hello world');
    }

    public function benchSha1()
    {
        hash('sha1', 'hello world');
    }

    public function benchSha256()
    {
        hash('sha256', 'hello world');
    }
}

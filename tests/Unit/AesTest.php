<?php

namespace nguyenanhung\PhpAes\Test\Unit;

use nguyenanhung\PhpAes\Aes;
use PHPUnit_Framework_TestCase;

/**
 * Class AesTest
 *
 * @package   nguyenanhung\PhpAes\Aes\Tests\Unit
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class AesTest extends PHPUnit_Framework_TestCase
{

    /**
     * Function testConstructIvLengthException
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/10/2020 25:18
     */
    public function testConstructIvLengthException()
    {
        new Aes('abcdef0123456789', 'CBC');
    }

    /**
     * Function testConstructZlengthException
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/10/2020 25:15
     */
    public function testConstructZlengthException()
    {
        new Aes('abcdef012345678');
    }
}

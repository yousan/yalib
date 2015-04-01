<?php
/**
 * Created by IntelliJ IDEA.
 * User: yousan
 * Date: 4/1/15
 * Time: 9:29 PM
 */

namespace Yousan\yalib;

class yalibTest extends \PHPUnit_Framework_TestCase
{
    public function testGi() {
        $c = yalib::gi('test');
        $this->assertInstanceOf(yalib::class, $c);
    }
}
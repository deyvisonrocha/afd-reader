<?php
namespace Convenia\AfdReader\Tests;

use Convenia\AfdReader\Exception\DirectionNotExistsException;
use PHPUnit_Framework_TestCase;
use Convenia\AfdReader\Field\Direction;
use \DateTime;

/**
 * Class AleloOrderTest.
 */
class DirectionTest extends PHPUnit_Framework_TestCase
{
    public function test_success_value()
    {
        $obj = new Direction();
        $val = $obj->format('E');
        $this->assertEquals("Entrada", $val);
    }

    public function test_fail_value()
    {
        $this->setExpectedException('Convenia\AfdReader\Exception\DirectionNotExistsException');
        $obj = new Direction();
        $obj->format('HH');
    }
}

<?php

use Potaka\Helper\Casing\CaseHelper;

/**
 * Description of CaseHelper
 *
 * @author po_taka
 */
class CaseHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testCamelCase()
    {
        $helper = new CaseHelper();
        $tests = [
            'camelCase' => 'camelCase',
            'camel_Case' => 'camelCase',
        ];
        foreach ($tests as $given => $expected) {
            $this->assertSame(
                $expected,
                $helper->camelCase($given)
            );
        }
    }
    
    public function testBumpyCase()
    {
        $helper = new CaseHelper();
        $tests = [
            'camelCase' => 'CamelCase',
            'camel_Case' => 'CamelCase',
        ];
        foreach ($tests as $given => $expected) {
            $this->assertSame(
                $expected,
                $helper->bumpyCase($given)
            );
        }
    }
}
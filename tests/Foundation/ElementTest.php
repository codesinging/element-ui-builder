<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/14 19:47
 */

namespace CodeSinging\ElementUiBuilder\Tests\Foundation;

use CodeSinging\ElementUiBuilder\Foundation\Element;
use PHPUnit\Framework\TestCase;

class ElementTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<div></div>', new Element('div'));
    }
}
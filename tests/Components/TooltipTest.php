<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:51
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Tooltip;
use PHPUnit\Framework\TestCase;

class TooltipTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-tooltip></el-tooltip>', new Tooltip());
        self::assertEquals('<el-tooltip content="Message"></el-tooltip>', new Tooltip('Message'));
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:45
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Popover;
use PHPUnit\Framework\TestCase;

class PopoverTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-popover></el-popover>', new Popover());
        self::assertEquals('<el-popover title="Title" content="Message"></el-popover>', new Popover('Title','Message'));
    }
}
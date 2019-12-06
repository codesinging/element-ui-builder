<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:53
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\MenuItem;
use PHPUnit\Framework\TestCase;

class MenuItemTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-menu-item></el-menu-item>', new MenuItem());
        self::assertEquals('<el-menu-item index="1-1"></el-menu-item>', new MenuItem('1-1'));
        self::assertEquals('<el-menu-item index="1-1">Home</el-menu-item>', new MenuItem('1-1', 'Home'));
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:38
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Drawer;
use PHPUnit\Framework\TestCase;

class DrawerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-drawer></el-drawer>', new Drawer());
    }
}
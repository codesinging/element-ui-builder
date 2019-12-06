<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:44
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\DropdownMenu;
use PHPUnit\Framework\TestCase;

class DropdownMenuTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-dropdown-menu>' . PHP_EOL . '</el-dropdown-menu>', new DropdownMenu());
    }

    public function testItem()
    {
        $menu = new DropdownMenu();
        $menu->item();
        $menu->item();

        self::assertEquals(
            '<el-dropdown-menu>'
            . PHP_EOL . '<el-dropdown-item></el-dropdown-item>'
            . PHP_EOL . '<el-dropdown-item></el-dropdown-item>'
            . PHP_EOL . '</el-dropdown-menu>',
            $menu
        );
    }
}
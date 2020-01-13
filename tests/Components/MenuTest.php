<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 13:40
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Menu;
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-menu>' . PHP_EOL . '</el-menu>', new Menu());
    }

    public function testMenuItem()
    {
        $menu = new Menu();
        $menu->menuItem();
        $menu->menuItem();

        self::assertEquals(
            '<el-menu>'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '</el-menu>',
            $menu
        );
    }

    public function testMenuItemGroup()
    {
        $menu = new Menu();
        $menu->menuItemGroup();
        $menu->menuItem();

        self::assertEquals(
            '<el-menu>'
            . PHP_EOL . '<el-menu-item-group>' . PHP_EOL . '</el-menu-item-group>'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '</el-menu>',
            $menu
        );
    }

    public function testSubmenu()
    {
        $menu = new Menu();
        $menu->submenu();
        $menu->menuItem();

        self::assertEquals(
            '<el-menu>'
            . PHP_EOL . '<el-submenu>' . PHP_EOL . '</el-submenu>'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '</el-menu>',
            $menu
        );
    }
}
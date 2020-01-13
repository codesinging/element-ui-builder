<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:56
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\MenuItemGroup;
use PHPUnit\Framework\TestCase;

class MenuItemGroupTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-menu-item-group>' . PHP_EOL . '</el-menu-item-group>', new MenuItemGroup());
        self::assertEquals('<el-menu-item-group title="Title">' . PHP_EOL . '</el-menu-item-group>', new MenuItemGroup('Title'));
    }

    public function testMenuItem()
    {
        $group = new MenuItemGroup('Title');
        $group->menuItem();
        $group->menuItem();

        self::assertEquals(
            '<el-menu-item-group title="Title">'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '</el-menu-item-group>',
            $group
        );
    }

    public function testSubmenu()
    {
        $group = new MenuItemGroup('Title');
        $group->submenu();
        $group->menuItem();

        self::assertEquals(
            '<el-menu-item-group title="Title">'
            . PHP_EOL . '<el-submenu>' . PHP_EOL . '</el-submenu>'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '</el-menu-item-group>',
            $group
        );
    }
}
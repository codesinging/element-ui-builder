<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:56
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Submenu;
use PHPUnit\Framework\TestCase;

class SubmenuTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-submenu>' . PHP_EOL . '</el-submenu>', new Submenu());
        self::assertEquals('<el-submenu index="1-1">' . PHP_EOL . '</el-submenu>', new Submenu('1-1'));
        self::assertEquals('<el-submenu index="1-1">' . PHP_EOL . '<template slot="title">Title</template>' . PHP_EOL . '</el-submenu>', new Submenu('1-1', 'Title'));
    }

    public function testMenuItem()
    {
        $submenu = new Submenu('1-1', 'Title');
        $submenu->menuItem();
        $submenu->menuItem();

        self::assertEquals(
            '<el-submenu index="1-1">'
            . PHP_EOL . '<template slot="title">Title</template>'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '</el-submenu>',
            $submenu
        );
    }

    public function testMenuItemGroup()
    {
        $submenu = new Submenu('1-1', 'Title');
        $submenu->menuItemGroup();
        $submenu->menuItem();

        self::assertEquals(
            '<el-submenu index="1-1">'
            . PHP_EOL . '<template slot="title">Title</template>'
            . PHP_EOL . '<el-menu-item-group>' . PHP_EOL . '</el-menu-item-group>'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '</el-submenu>',
            $submenu
        );
    }

    public function testSubmenu()
    {
        $submenu = new Submenu('1-1', 'Title');
        $submenu->submenu();
        $submenu->menuItem();

        self::assertEquals(
            '<el-submenu index="1-1">'
            . PHP_EOL . '<template slot="title">Title</template>'
            . PHP_EOL . '<el-submenu>' . PHP_EOL . '</el-submenu>'
            . PHP_EOL . '<el-menu-item></el-menu-item>'
            . PHP_EOL . '</el-submenu>',
            $submenu
        );
    }
}
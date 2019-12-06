<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:32
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Tabs;
use PHPUnit\Framework\TestCase;

class TabsTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-tabs>' . PHP_EOL . '</el-tabs>', new Tabs());
    }

    public function testTabPane()
    {
        $tabs = new Tabs();
        $tabs->tabPane();
        $tabs->tabPane();

        self::assertEquals(
            '<el-tabs>'
            . PHP_EOL . '<el-tab-pane></el-tab-pane>'
            . PHP_EOL . '<el-tab-pane></el-tab-pane>'
            . PHP_EOL . '</el-tabs>',
            $tabs
        );
    }
}
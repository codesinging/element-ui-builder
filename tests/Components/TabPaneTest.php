<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:30
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\TabPane;
use PHPUnit\Framework\TestCase;

class TabPaneTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-tab-pane></el-tab-pane>', new TabPane());
        self::assertEquals('<el-tab-pane label="Beijing"></el-tab-pane>', new TabPane('Beijing'));
        self::assertEquals('<el-tab-pane label="Beijing" name="beijing"></el-tab-pane>', new TabPane('Beijing', 'beijing'));
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:18
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Collapse;
use PHPUnit\Framework\TestCase;

class CollapseTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-collapse>' . PHP_EOL . '</el-collapse>', new Collapse());
    }

    public function testItem()
    {
        $collapse = new Collapse();
        $collapse->item();
        $collapse->item();

        self::assertEquals(
            '<el-collapse>'
            . PHP_EOL . '<el-collapse-item></el-collapse-item>'
            . PHP_EOL . '<el-collapse-item></el-collapse-item>'
            . PHP_EOL . '</el-collapse>',
            $collapse->build()
        );
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:56
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Dialog;
use PHPUnit\Framework\TestCase;

class DialogTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-dialog>' . PHP_EOL . '</el-dialog>', new Dialog());
        self::assertEquals('<el-dialog title="Title">' . PHP_EOL . '</el-dialog>', new Dialog('Title'));
        self::assertEquals('<el-dialog title="Title">' .PHP_EOL . 'Content' . PHP_EOL . '</el-dialog>', new Dialog('Title', 'Content'));
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:10
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Col;
use CodeSinging\ElementUiBuilder\Components\Row;
use PHPUnit\Framework\TestCase;

class RowTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-row>' . PHP_EOL . '</el-row>', Row::instance());
        self::assertEquals('<el-row :gutter="20">' . PHP_EOL . '</el-row>', Row::instance([':gutter' => 20]));
    }

    public function testCol()
    {
        $row = new Row();
        $row->col(12);
        $row->col(function (Col $col) {
            return $col;
        });
        $row->col(new Col(6, 3));

        self::assertEquals(
            '<el-row>'
            . PHP_EOL . '<el-col :span="12"></el-col>'
            . PHP_EOL . '<el-col></el-col>'
            . PHP_EOL . '<el-col :span="6" :offset="3"></el-col>'
            . PHP_EOL . '</el-row>',
            $row
        );
    }
}
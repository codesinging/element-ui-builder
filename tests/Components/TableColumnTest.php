<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:56
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\TableColumn;
use PHPUnit\Framework\TestCase;

class TableColumnTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-table-column></el-table-column>', new TableColumn());
        self::assertEquals('<el-table-column prop="name"></el-table-column>', new TableColumn('name'));
        self::assertEquals('<el-table-column prop="name" label="Name"></el-table-column>', new TableColumn('name', 'Name'));
    }
}
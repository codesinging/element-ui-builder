<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 20:48
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Table;
use CodeSinging\ElementUiBuilder\Components\TableColumn;
use PHPUnit\Framework\TestCase;

class TableTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-table>' . PHP_EOL . '</el-table>', Table::instance());
    }

    public function testColumn()
    {
        $table = new Table();
        $table->column('id');
        $table->column(function (TableColumn $column) {
            $column->set('prop', 'name');
        });
        $table->column(new TableColumn('age'));
        $table->column()->set('prop', 'sex');

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column prop="id"></el-table-column>'
            . PHP_EOL . '<el-table-column prop="name"></el-table-column>'
            . PHP_EOL . '<el-table-column prop="age"></el-table-column>'
            . PHP_EOL . '<el-table-column prop="sex"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

    public function testSelectionColumn()
    {
        $table = new Table();
        $table->selection();

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column type="selection" align="center" width="60px"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

    public function testIndexColumn()
    {
        $table = new Table();
        $table->index();
        $table->index('No');

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column label="#" type="index" align="center" width="60px"></el-table-column>'
            . PHP_EOL . '<el-table-column label="No" type="index" align="center" width="60px"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

    public function testExpandColumn()
    {
        $table = new Table();
        $table->expand();

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column type="expand" align="center" width="60px"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

    public function testIdColumn()
    {
        $table = new Table();
        $table->id();
        $table->id('序号');

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column prop="id" label="Id" align="center" width="80px"></el-table-column>'
            . PHP_EOL . '<el-table-column prop="id" label="序号" align="center" width="80px"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

    public function testNameColumn()
    {
        $table = new Table();
        $table->name();
        $table->name('姓名');

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column prop="name" label="名称"></el-table-column>'
            . PHP_EOL . '<el-table-column prop="name" label="姓名"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

    public function testCreateTimeColumn()
    {
        $table = new Table();
        $table->createTime();
        $table->createTime('成立日期');

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column prop="create_time" label="创建时间" align="center"></el-table-column>'
            . PHP_EOL . '<el-table-column prop="create_time" label="成立日期" align="center"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

    public function testUpdateTimeColumn()
    {
        $table = new Table();
        $table->updateTime();
        $table->updateTime('修改日期');

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column prop="update_time" label="更新时间" align="center"></el-table-column>'
            . PHP_EOL . '<el-table-column prop="update_time" label="修改日期" align="center"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

    public function testMagicCallColumn()
    {
        $table = new Table();
        $table->age();
        $table->sex('性别');

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column prop="age" label="Age"></el-table-column>'
            . PHP_EOL . '<el-table-column prop="sex" label="性别"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

}
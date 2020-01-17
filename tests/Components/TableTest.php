<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 20:48
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Table;
use CodeSinging\ElementUiBuilder\Components\TableColumn;
use CodeSinging\ElementUiBuilder\Components\Tag;
use PHPUnit\Framework\TestCase;

class TableTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-table>' . PHP_EOL . '</el-table>', Table::instance());
    }

    public function testBorder()
    {
        self::assertEquals('<el-table :border="true">' . PHP_EOL . '</el-table>', Table::instance()->border());
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
        $table->selectionColumn();

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
        $table->indexColumn();
        $table->indexColumn('No');

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
        $table->expandColumn();

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
        $table->idColumn();
        $table->idColumn('序号');

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
        $table->nameColumn();
        $table->nameColumn('姓名');

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
        $table->createTimeColumn();
        $table->createTimeColumn('成立日期');

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
        $table->updateTimeColumn();
        $table->updateTimeColumn('修改日期');

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column prop="update_time" label="更新时间" align="center"></el-table-column>'
            . PHP_EOL . '<el-table-column prop="update_time" label="修改日期" align="center"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

    public function testActionColumn()
    {
        $table = new Table();
        $table->actionColumn();

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column align="center" class-name="table-column-action" width="240px" label="操作">'
            . PHP_EOL . '<template slot-scope="scope">'
            . PHP_EOL . '<el-button size="mini" @click="onItemEditClick(scope.row)" type="success">编辑</el-button>'
            . PHP_EOL . '<el-button size="mini" @click="onItemViewClick(scope.row)" type="primary">查看</el-button>'
            . PHP_EOL . '<el-button size="mini" @click="onItemDeleteClick(scope.row)" :loading="statuses[\'delete_\' + scope.row.id]" type="danger">删除</el-button>'
            . PHP_EOL . '</template>'
            . PHP_EOL . '</el-table-column>'
            . PHP_EOL . '</el-table>',
            $table->build()
        );
    }

    public function testTagColumn()
    {
        $table = new Table();
        $table->tagColumn('name', 'Name', 'primary');
        $table->tagColumn('name', 'Name', ['type' => 'success']);
        $table->tagColumn('name', 'Name', new Tag(null, 'danger'));

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column prop="name" label="Name" class-name="table-column-tag"><template slot-scope="scope"><el-tag type="primary" size="medium">{{ scope.row.name }}</el-tag></template></el-table-column>'
            . PHP_EOL . '<el-table-column prop="name" label="Name" class-name="table-column-tag"><template slot-scope="scope"><el-tag type="success" size="medium">{{ scope.row.name }}</el-tag></template></el-table-column>'
            . PHP_EOL . '<el-table-column prop="name" label="Name" class-name="table-column-tag"><template slot-scope="scope"><el-tag type="danger" size="medium">{{ scope.row.name }}</el-tag></template></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table->build()
        );
    }

    public function testMagicCallColumn()
    {
        $table = new Table();
        $table->ageColumn();
        $table->sexColumn('性别');

        self::assertEquals(
            '<el-table>'
            . PHP_EOL . '<el-table-column prop="age" label="Age"></el-table-column>'
            . PHP_EOL . '<el-table-column prop="sex" label="性别"></el-table-column>'
            . PHP_EOL . '</el-table>',
            $table
        );
    }

}
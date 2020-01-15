<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/15 17:00
 */

namespace CodeSinging\ElementUiBuilder\Tests\Composites;

use CodeSinging\ElementUiBuilder\Components\Button;
use CodeSinging\ElementUiBuilder\Composites\TableActionColumn;
use PHPUnit\Framework\TestCase;

class TableActionColumnTest extends TestCase
{
    public function testBuild()
    {
        $actionColumn = new TableActionColumn();

        self::assertEquals(
            '<el-table-column align="center" class-name="table-column-action" width="240px" label="操作">'
            .PHP_EOL . '<template slot-scope="scope">'
            .PHP_EOL . '<el-button size="mini" @click="onItemEditClick(scope.row)" type="success">编辑</el-button>'
            .PHP_EOL . '<el-button size="mini" @click="onItemViewClick(scope.row)" type="primary">查看</el-button>'
            .PHP_EOL . '<el-button size="mini" @click="onItemDeleteClick(scope.row)" :loading="statuses[\'delete_\' + scope.row.id]" type="danger">删除</el-button>'
            .PHP_EOL . '</template>'
            . PHP_EOL . '</el-table-column>',
            (string)$actionColumn
        );
    }

    public function testButtonBuildable()
    {
        $actionColumn = new TableActionColumn();
        $actionColumn->viewButton->buildable(false);

        self::assertEquals(
            '<el-table-column align="center" class-name="table-column-action" width="240px" label="操作">'
            .PHP_EOL . '<template slot-scope="scope">'
            .PHP_EOL . '<el-button size="mini" @click="onItemEditClick(scope.row)" type="success">编辑</el-button>'
            .PHP_EOL . '<el-button size="mini" @click="onItemDeleteClick(scope.row)" :loading="statuses[\'delete_\' + scope.row.id]" type="danger">删除</el-button>'
            .PHP_EOL . '</template>'
            . PHP_EOL . '</el-table-column>',
            (string)$actionColumn
        );
    }

    public function testAddButton()
    {
        $actionColumn = new TableActionColumn('增加操作');
        $actionColumn->add(new Button('权限', 'info', ['size' => 'mini']));

        self::assertEquals(
            '<el-table-column align="center" class-name="table-column-action" width="240px" label="增加操作">'
            .PHP_EOL . '<template slot-scope="scope">'
            .PHP_EOL . '<el-button size="mini" @click="onItemEditClick(scope.row)" type="success">编辑</el-button>'
            .PHP_EOL . '<el-button size="mini" @click="onItemViewClick(scope.row)" type="primary">查看</el-button>'
            .PHP_EOL . '<el-button size="mini" @click="onItemDeleteClick(scope.row)" :loading="statuses[\'delete_\' + scope.row.id]" type="danger">删除</el-button>'
            .PHP_EOL . '<el-button size="mini" type="info">权限</el-button>'
            .PHP_EOL . '</template>'
            . PHP_EOL . '</el-table-column>',
            (string)$actionColumn
        );
    }

    public function testPrependButton()
    {
        $actionColumn = new TableActionColumn();
        $actionColumn->prepend(new Button('权限', 'info', ['size' => 'mini']));

        self::assertEquals(
            '<el-table-column align="center" class-name="table-column-action" width="240px" label="操作">'
            .PHP_EOL . '<template slot-scope="scope">'
            .PHP_EOL . '<el-button size="mini" type="info">权限</el-button>'
            .PHP_EOL . '<el-button size="mini" @click="onItemEditClick(scope.row)" type="success">编辑</el-button>'
            .PHP_EOL . '<el-button size="mini" @click="onItemViewClick(scope.row)" type="primary">查看</el-button>'
            .PHP_EOL . '<el-button size="mini" @click="onItemDeleteClick(scope.row)" :loading="statuses[\'delete_\' + scope.row.id]" type="danger">删除</el-button>'
            .PHP_EOL . '</template>'
            . PHP_EOL . '</el-table-column>',
            (string)$actionColumn
        );
    }
}
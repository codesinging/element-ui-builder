<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/16 11:50
 */

namespace CodeSinging\ElementUiBuilder\Tests\Composites;

use CodeSinging\ElementUiBuilder\Composites\TableDialog;
use PHPUnit\Framework\TestCase;

class TableDialogTest extends TestCase
{
    public function testBase()
    {
        $dialog = new TableDialog('tableDialog', 'TableDialog');
        $dialog->table->column('name', 'Name');

        self::assertEquals(
            '<el-dialog title="TableDialog" ref="tableDialog" :visible.sync="tableDialog.visible" :width="tableDialog.width+\'%\'" :top="tableDialog.top+\'vh\'">'
            . PHP_EOL . '<div slot="footer">'
            . PHP_EOL . '<div class="float-left mt-1">'
            . PHP_EOL . '<el-button circle icon="el-icon-plus" size="small" @click="onDialogZoomOutClick(\'tableDialog\')" :disabled="tableDialog.width>=100"></el-button>'
            . PHP_EOL . '<el-button circle icon="el-icon-minus" size="small" @click="onDialogZoomInClick(\'tableDialog\')" :disabled="tableDialog.width<=60"></el-button>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '<div>'
            . PHP_EOL . '<el-button @click="tableDialog.visible = false">取消</el-button>'
            . PHP_EOL . '<el-button type="primary">确定</el-button>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '<el-table size="small" :border="true">'
            . PHP_EOL . '<el-table-column prop="name" label="Name"></el-table-column>'
            . PHP_EOL . '</el-table>'
            . PHP_EOL . '</el-dialog>',
            (string)$dialog
        );
    }

    public function testStore()
    {
        $dialog = new TableDialog('tableDialog', 'TableDialog');
        $dialog->build();

        self::assertEquals(
            [
                'visible' => false,
                'width' => 60,
                'top' => 20,
            ],
            $dialog->store('tableDialog')
        );
    }

}
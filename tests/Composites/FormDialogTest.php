<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/16 11:50
 */

namespace CodeSinging\ElementUiBuilder\Tests\Composites;

use CodeSinging\ElementUiBuilder\Composites\FormDialog;
use PHPUnit\Framework\TestCase;

class FormDialogTest extends TestCase
{
    public function testBase()
    {
        $dialog = new FormDialog('formDialog', 'FormDialog');
        $dialog->initForm('editForm', 'item');
        $dialog->form->item('name', 'Name')->input('item.name');

        self::assertEquals(
            '<el-dialog title="FormDialog" ref="formDialog" :visible.sync="formDialog.visible" :width="formDialog.width+\'%\'" :top="formDialog.top+\'vh\'">'
            . PHP_EOL . '<div slot="footer">'
            . PHP_EOL . '<div class="float-left mt-1">'
            . PHP_EOL . '<el-button circle icon="el-icon-plus" size="small" @click="onDialogZoomOutClick(\'formDialog\')" :disabled="formDialog.width>=100"></el-button>'
            . PHP_EOL . '<el-button circle icon="el-icon-minus" size="small" @click="onDialogZoomInClick(\'formDialog\')" :disabled="formDialog.width<=60"></el-button>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '<div>'
            . PHP_EOL . '<el-checkbox v-model="formDialog.autoClose" class="mr-5">保存成功后自动关闭</el-checkbox>'
            . PHP_EOL . '<el-button @click="formDialog.visible = false">取消</el-button>'
            . PHP_EOL . '<el-button type="primary">确定</el-button>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '<el-form label-position="top" size="medium" ref="editForm">'
            . PHP_EOL . '<el-form-item prop="name" label="Name"><el-input v-model="item.name"></el-input></el-form-item>'
            . PHP_EOL . '</el-form>'
            . PHP_EOL . '</el-dialog>',
            (string)$dialog
        );
    }

    public function testStore()
    {
        $dialog = new FormDialog('baseDialog', 'BaseDialog');
        $dialog->build();

        self::assertEquals(
            [
                'visible' => false,
                'width' => 60,
                'top' => 20,
                'autoClose' => true,
            ],
            $dialog->store('baseDialog')
        );
    }

}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/16 01:11
 */

namespace CodeSinging\ElementUiBuilder\Tests\Composites;

use CodeSinging\ElementUiBuilder\Composites\BaseDialog;
use PHPUnit\Framework\TestCase;

class BaseDialogTest extends TestCase
{
    public function testBase()
    {
        $baseDialog = new BaseDialog('baseDialog', 'BaseDialog');

        self::assertEquals(
            '<el-dialog title="BaseDialog" ref="baseDialog" :visible.sync="baseDialog.visible" :width="baseDialog.width+\'%\'" :top="baseDialog.top+\'vh\'">'
            . PHP_EOL . '<div slot="footer">'
            . PHP_EOL . '<div class="float-left mt-1">'
            . PHP_EOL . '<el-button circle icon="el-icon-plus" size="small" @click="onBaseDialogZoomOutClick(\'baseDialog\')" :disabled="baseDialog.width>=100"></el-button>'
            . PHP_EOL . '<el-button circle icon="el-icon-minus" size="small" @click="onBaseDialogZoomInClick(\'baseDialog\')" :disabled="baseDialog.width<=60"></el-button>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '<el-button @click="baseDialog.visible = false">取消</el-button>'
            . PHP_EOL . '<el-button type="primary">确定</el-button>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '</el-dialog>',
            (string)$baseDialog
        );
    }

    public function testConfirmHandler()
    {
        $baseDialog = new BaseDialog('baseDialog', 'BaseDialog');
        $baseDialog->confirmButton->vClick('onSubmit');

        self::assertEquals(
            '<el-dialog title="BaseDialog" ref="baseDialog" :visible.sync="baseDialog.visible" :width="baseDialog.width+\'%\'" :top="baseDialog.top+\'vh\'">'
            . PHP_EOL . '<div slot="footer">'
            . PHP_EOL . '<div class="float-left mt-1">'
            . PHP_EOL . '<el-button circle icon="el-icon-plus" size="small" @click="onBaseDialogZoomOutClick(\'baseDialog\')" :disabled="baseDialog.width>=100"></el-button>'
            . PHP_EOL . '<el-button circle icon="el-icon-minus" size="small" @click="onBaseDialogZoomInClick(\'baseDialog\')" :disabled="baseDialog.width<=60"></el-button>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '<el-button @click="baseDialog.visible = false">取消</el-button>'
            . PHP_EOL . '<el-button type="primary" @click="onSubmit">确定</el-button>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '</el-dialog>',
            (string)$baseDialog
        );
    }

    public function testZoomContainerIsNotBuildable()
    {
        $baseDialog = new BaseDialog('baseDialog', 'BaseDialog');
        $baseDialog->zoomContainer->buildable(false);

        self::assertEquals(
            '<el-dialog title="BaseDialog" ref="baseDialog" :visible.sync="baseDialog.visible" :width="baseDialog.width+\'%\'" :top="baseDialog.top+\'vh\'">'
            . PHP_EOL . '<div slot="footer">'
            . PHP_EOL . '<el-button @click="baseDialog.visible = false">取消</el-button>'
            . PHP_EOL . '<el-button type="primary">确定</el-button>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '</el-dialog>',
            (string)$baseDialog
        );
    }
}
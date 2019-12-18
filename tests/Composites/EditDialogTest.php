<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/17 13:30
 */

namespace CodeSinging\ElementUiBuilder\Tests\Composites;

use CodeSinging\ElementUiBuilder\Composites\EditDialog;
use PHPUnit\Framework\TestCase;

class EditDialogTest extends TestCase
{
    public function testBuild()
    {
        $dialog = new EditDialog('Edit');

        self::assertEquals(
            '<el-dialog title="Edit">'
            . PHP_EOL . '<div slot="footer">'
            . PHP_EOL . '<el-button>Cancel</el-button>'
            . PHP_EOL . '<el-button type="primary">Confirm</el-button>'
            . PHP_EOL . '</div>'
            . PHP_EOL . '</el-dialog>',
            $dialog->build()
        );
    }
}
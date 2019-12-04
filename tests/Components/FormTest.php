<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:41
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Form;
use CodeSinging\ElementUiBuilder\Components\FormItem;
use PHPUnit\Framework\TestCase;

class FormTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-form>' . PHP_EOL . '</el-form>', Form::instance());
        self::assertEquals('<el-form :model="data">' . PHP_EOL . '</el-form>', Form::instance('data'));
    }

    public function testItem()
    {
        $form = new Form();
        $form->item();
        $form->item(function (FormItem $item) {
            $item->set('label', 'Name');
        });
        $form->item(function (FormItem $item) {
            return $item->set('label', 'age');
        });
        $form->item(new FormItem('id'));

        self::assertEquals(
            '<el-form>'
            . PHP_EOL . '<el-form-item></el-form-item>'
            . PHP_EOL . '<el-form-item label="Name"></el-form-item>'
            . PHP_EOL . '<el-form-item label="age"></el-form-item>'
            . PHP_EOL . '<el-form-item prop="id"></el-form-item>'
            . PHP_EOL . '</el-form>',
            $form->build()
        );
    }
}
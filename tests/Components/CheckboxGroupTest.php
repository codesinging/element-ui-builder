<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:17
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\CheckboxGroup;
use PHPUnit\Framework\TestCase;

class CheckboxGroupTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-checkbox-group>' . PHP_EOL . '</el-checkbox-group>', new CheckboxGroup());
        self::assertEquals('<el-checkbox-group v-model="checkedList">' . PHP_EOL . '</el-checkbox-group>', new CheckboxGroup('checkedList'));
    }

    public function testOptions()
    {
        $group = new CheckboxGroup();
        $group->options([
            ['label' => 'book', 'props' => ['disabled']],
            ['label' => 'pen'],
        ]);

        self::assertEquals(
            '<el-checkbox-group>'
            . PHP_EOL . '<el-checkbox disabled label="book"></el-checkbox>'
            . PHP_EOL . '<el-checkbox label="pen"></el-checkbox>'
            . PHP_EOL . '</el-checkbox-group>',
            $group
        );
    }

    public function testIsButton()
    {
        $group = new CheckboxGroup();
        $group->isButton();
        $group->options([
            ['label' => 'book'],
            ['label' => 'pen'],
        ]);

        self::assertEquals(
            '<el-checkbox-group>'
            . PHP_EOL . '<el-checkbox-button label="book"></el-checkbox-button>'
            . PHP_EOL . '<el-checkbox-button label="pen"></el-checkbox-button>'
            . PHP_EOL . '</el-checkbox-group>',
            $group
        );
    }

    public function testCheckbox()
    {
        $group = new CheckboxGroup();
        $group->checkbox('book');
        $group->checkbox('pen');

        self::assertEquals(
            '<el-checkbox-group>'
            . PHP_EOL . '<el-checkbox label="book"></el-checkbox>'
            . PHP_EOL . '<el-checkbox label="pen"></el-checkbox>'
            . PHP_EOL . '</el-checkbox-group>',
            (string)$group
        );
    }

    public function testCheckboxButton()
    {
        $group = new CheckboxGroup();
        $group->checkboxButton('book');
        $group->checkboxButton('pen');

        self::assertEquals(
            '<el-checkbox-group>'
            . PHP_EOL . '<el-checkbox-button label="book"></el-checkbox-button>'
            . PHP_EOL . '<el-checkbox-button label="pen"></el-checkbox-button>'
            . PHP_EOL . '</el-checkbox-group>',
            $group
        );
    }
}
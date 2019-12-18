<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:54
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\RadioGroup;
use PHPUnit\Framework\TestCase;

class RadioGroupTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-radio-group>' . PHP_EOL . '</el-radio-group>', new RadioGroup());
        self::assertEquals('<el-radio-group v-model="sex">' . PHP_EOL . '</el-radio-group>', new RadioGroup('sex'));
    }

    public function testOptions()
    {
        $group = new RadioGroup();
        $group->options([
            ['label' => 'female'],
            ['label' => 'male'],
        ]);

        self::assertEquals(
            '<el-radio-group>'
            . PHP_EOL . '<el-radio label="female"></el-radio>'
            . PHP_EOL . '<el-radio label="male"></el-radio>'
            . PHP_EOL . '</el-radio-group>',
            $group->build()
        );
    }

    public function testIsButton()
    {
        $group = new RadioGroup();
        $group->isButton();
        $group->options([
            ['label' => 'female'],
            ['label' => 'male'],
        ]);

        self::assertEquals(
            '<el-radio-group>'
            . PHP_EOL . '<el-radio-button label="female"></el-radio-button>'
            . PHP_EOL . '<el-radio-button label="male"></el-radio-button>'
            . PHP_EOL . '</el-radio-group>',
            $group->build()
        );
    }

    public function testRadio()
    {
        $group = new RadioGroup();
        $group->radio('female');
        $group->radio('male');

        self::assertEquals(
            '<el-radio-group>'
            . PHP_EOL . '<el-radio label="female"></el-radio>'
            . PHP_EOL . '<el-radio label="male"></el-radio>'
            . PHP_EOL . '</el-radio-group>',
            $group->build()
        );
    }

    public function testRadioButton()
    {
        $group = new RadioGroup();
        $group->radioButton('female');
        $group->radioButton('male');

        self::assertEquals(
            '<el-radio-group>'
            . PHP_EOL . '<el-radio-button label="female"></el-radio-button>'
            . PHP_EOL . '<el-radio-button label="male"></el-radio-button>'
            . PHP_EOL . '</el-radio-group>',
            $group->build()
        );
    }
}
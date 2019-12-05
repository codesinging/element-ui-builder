<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:45
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\RadioButton;
use PHPUnit\Framework\TestCase;

class RadioButtonTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-radio-button></el-radio-button>', new RadioButton());
        self::assertEquals('<el-radio-button label="male"></el-radio-button>', new RadioButton('male'));
    }
}
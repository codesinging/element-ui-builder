<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:10
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\CheckboxButton;
use PHPUnit\Framework\TestCase;

class CheckboxButtonTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-checkbox-button></el-checkbox-button>', new CheckboxButton());
        self::assertEquals('<el-checkbox-button label="male"></el-checkbox-button>', new CheckboxButton('male'));
    }
}
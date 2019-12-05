<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 17:45
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\ColorPicker;
use PHPUnit\Framework\TestCase;

class ColorPickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-color-picker></el-color-picker>', new ColorPicker());
    }
}
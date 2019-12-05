<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:26
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\WeekPicker;
use PHPUnit\Framework\TestCase;

class WeekPickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-date-picker type="week"></el-date-picker>', new WeekPicker());
    }
}
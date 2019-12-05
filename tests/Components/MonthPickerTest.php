<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:26
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\MonthPicker;
use PHPUnit\Framework\TestCase;

class MonthPickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-date-picker type="month"></el-date-picker>', new MonthPicker());
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:26
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\MonthRangePicker;
use PHPUnit\Framework\TestCase;

class MonthRangePickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-date-picker type="monthrange"></el-date-picker>', new MonthRangePicker());
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:26
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\DateRangePicker;
use PHPUnit\Framework\TestCase;

class DateRangePickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-date-picker type="daterange"></el-date-picker>', new DateRangePicker());
    }
}
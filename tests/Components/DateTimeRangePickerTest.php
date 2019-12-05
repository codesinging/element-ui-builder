<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:38
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\DateTimeRangePicker;
use PHPUnit\Framework\TestCase;

class DateTimeRangePickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-date-picker type="datetimerange"></el-date-picker>', new DateTimeRangePicker());
    }
}
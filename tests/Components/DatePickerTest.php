<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:08
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\DatePicker;
use PHPUnit\Framework\TestCase;

class DatePickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-date-picker></el-date-picker>', new DatePicker());
    }
}
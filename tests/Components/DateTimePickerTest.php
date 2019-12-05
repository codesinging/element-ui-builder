<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:38
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\DateTimePicker;
use PHPUnit\Framework\TestCase;

class DateTimePickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-date-picker type="datetime"></el-date-picker>', new DateTimePicker());
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:03
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\TimePicker;
use PHPUnit\Framework\TestCase;

class TimePickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-time-picker></el-time-picker>', new TimePicker());
    }
}
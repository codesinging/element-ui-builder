<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:26
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\YearPicker;
use PHPUnit\Framework\TestCase;

class YearPickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-date-picker type="year"></el-date-picker>', (string)new YearPicker());
    }
}
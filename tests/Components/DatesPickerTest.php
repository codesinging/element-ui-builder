<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:26
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\DatesPicker;
use PHPUnit\Framework\TestCase;

class DatesPickerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-date-picker type="dates"></el-date-picker>', new DatesPicker());
    }
}
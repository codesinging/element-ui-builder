<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:50
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Calendar;
use PHPUnit\Framework\TestCase;

class CalendarTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-calendar></el-calendar>', new Calendar());
    }
}
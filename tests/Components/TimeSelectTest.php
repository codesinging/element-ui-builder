<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:01
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\TimeSelect;
use PHPUnit\Framework\TestCase;

class TimeSelectTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-time-select></el-time-select>', new TimeSelect());
    }
}
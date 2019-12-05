<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 17:41
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Rate;
use PHPUnit\Framework\TestCase;

class RateTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-rate></el-rate>', new Rate());
    }
}
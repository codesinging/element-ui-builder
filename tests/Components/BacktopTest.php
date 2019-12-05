<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:43
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Backtop;
use PHPUnit\Framework\TestCase;

class BacktopTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-backtop></el-backtop>', new Backtop());
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:31
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Alert;
use PHPUnit\Framework\TestCase;

class AlertTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-alert></el-alert>', new Alert());
        self::assertEquals('<el-alert title="title"></el-alert>', new Alert('title'));
        self::assertEquals('<el-alert title="title"></el-alert>', (new Alert())->title('title'));
    }
}
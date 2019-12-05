<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:53
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Switcher;
use PHPUnit\Framework\TestCase;

class SwitcherTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-switch></el-switch>', new Switcher());
        self::assertEquals('<el-switch v-model="switch"></el-switch>', new Switcher('switch'));
    }
}
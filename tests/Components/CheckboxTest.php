<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:06
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Checkbox;
use PHPUnit\Framework\TestCase;

class CheckboxTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-checkbox></el-checkbox>', Checkbox::instance());
        self::assertEquals('<el-checkbox v-model="checked"></el-checkbox>', Checkbox::instance('checked'));
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 23:50
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Input;
use PHPUnit\Framework\TestCase;

class InputTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-input></el-input>', new Input());
        self::assertEquals('<el-input v-model="name"></el-input>', new Input('name'));
    }
}
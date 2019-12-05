<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:40
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Radio;
use PHPUnit\Framework\TestCase;

class RadioTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-radio></el-radio>', new Radio());
        self::assertEquals('<el-radio v-model="sex" label="male"></el-radio>', new Radio('sex', 'male'));
    }
}
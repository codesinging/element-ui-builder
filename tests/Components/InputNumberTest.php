<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:31
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\InputNumber;
use PHPUnit\Framework\TestCase;

class InputNumberTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-input-number></el-input-number>', new InputNumber());
        self::assertEquals('<el-input-number v-model="age"></el-input-number>', new InputNumber('age'));
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:37
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Option;
use PHPUnit\Framework\TestCase;

class OptionTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-option></el-option>', new Option());
        self::assertEquals('<el-option value="1" label="female"></el-option>', new Option(1, 'female'));
    }
}
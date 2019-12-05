<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:45
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Cascader;
use PHPUnit\Framework\TestCase;

class CascaderTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-cascader></el-cascader>', new Cascader());
    }
}
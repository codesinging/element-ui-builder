<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:14
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\CollapseItem;
use PHPUnit\Framework\TestCase;

class CollapseItemTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-collapse-item></el-collapse-item>', new CollapseItem());
    }
}
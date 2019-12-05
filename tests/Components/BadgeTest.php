<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:18
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Badge;
use PHPUnit\Framework\TestCase;

class BadgeTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-badge></el-badge>', new Badge());
        self::assertEquals('<el-badge :value="10"></el-badge>', new Badge(10));
    }
}
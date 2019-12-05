<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:12
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Tree;
use PHPUnit\Framework\TestCase;

class TreeTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-tree></el-tree>', new Tree());
        self::assertEquals('<el-tree :data="data"></el-tree>', new Tree('data'));
    }
}
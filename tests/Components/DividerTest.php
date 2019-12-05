<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:54
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Divider;
use PHPUnit\Framework\TestCase;

class DividerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-divider></el-divider>', new Divider());
        self::assertEquals('<el-divider>Title</el-divider>', new Divider('Title'));
    }
}
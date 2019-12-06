<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:18
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\PopConfirm;
use PHPUnit\Framework\TestCase;

class PopConfirmTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-popconfirm></el-popconfirm>', new PopConfirm());
        self::assertEquals('<el-popconfirm title="Delete?"></el-popconfirm>', new PopConfirm('Delete?'));
    }
}
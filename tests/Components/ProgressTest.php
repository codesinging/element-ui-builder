<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:07
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Progress;
use PHPUnit\Framework\TestCase;

class ProgressTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-progress></el-progress>', new Progress());
        self::assertEquals('<el-progress :percentage="50"></el-progress>', new Progress(50));
    }
}
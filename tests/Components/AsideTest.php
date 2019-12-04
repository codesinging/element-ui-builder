<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:23
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Aside;
use PHPUnit\Framework\TestCase;

class AsideTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-aside>' . PHP_EOL . '</el-aside>', new Aside());
        self::assertEquals('<el-aside width="300px">' . PHP_EOL . '</el-aside>', new Aside('300px'));
    }
}
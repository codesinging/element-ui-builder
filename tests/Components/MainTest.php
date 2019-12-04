<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:20
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-main>' . PHP_EOL . '</el-main>', new Main());
    }
}
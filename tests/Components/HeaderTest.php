<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:23
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Header;
use PHPUnit\Framework\TestCase;

class HeaderTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-header>' . PHP_EOL . '</el-header>', new Header());
        self::assertEquals('<el-header height="60px">' . PHP_EOL . '</el-header>', (string)new Header('60px'));
    }
}
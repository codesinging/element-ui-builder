<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 18:47
 */

namespace CodeSinging\ElementUiBuilder\Tests;

use CodeSinging\ElementUiBuilder\ElementUi;
use PHPUnit\Framework\TestCase;

class ElementUiTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-element-ui></el-element-ui>', ElementUi::instance());
    }
}
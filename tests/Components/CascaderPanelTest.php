<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:49
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\CascaderPanel;
use PHPUnit\Framework\TestCase;

class CascaderPanelTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-cascader-panel></el-cascader-panel>', new CascaderPanel());
    }
}
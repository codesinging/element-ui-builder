<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:05
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\PageHeader;
use PHPUnit\Framework\TestCase;

class PageHeaderTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-page-header></el-page-header>', new PageHeader());
        self::assertEquals('<el-page-header title="Back"></el-page-header>', new PageHeader('Back'));
        self::assertEquals('<el-page-header title="Back" content="Detail"></el-page-header>', new PageHeader('Back', 'Detail'));
    }
}
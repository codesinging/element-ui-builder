<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:18
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Breadcrumb;
use PHPUnit\Framework\TestCase;

class BreadcrumbTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-breadcrumb>' . PHP_EOL . '</el-breadcrumb>', new Breadcrumb());
    }

    public function testItem()
    {
        $breadcrumb = new Breadcrumb();
        $breadcrumb->item();
        $breadcrumb->item();

        self::assertEquals(
            '<el-breadcrumb>'
            . PHP_EOL . '<el-breadcrumb-item></el-breadcrumb-item>'
            . PHP_EOL . '<el-breadcrumb-item></el-breadcrumb-item>'
            . PHP_EOL . '</el-breadcrumb>',
            $breadcrumb
        );
    }
}
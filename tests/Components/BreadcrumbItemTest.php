<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:14
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\BreadcrumbItem;
use PHPUnit\Framework\TestCase;

class BreadcrumbItemTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-breadcrumb-item></el-breadcrumb-item>', new BreadcrumbItem());
        self::assertEquals('<el-breadcrumb-item>Home</el-breadcrumb-item>', new BreadcrumbItem('Home'));
        self::assertEquals('<el-breadcrumb-item><a href="/home">Home</a></el-breadcrumb-item>', new BreadcrumbItem('Home', '/home'));
    }
}
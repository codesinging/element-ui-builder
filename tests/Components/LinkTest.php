<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:31
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Link;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-link></el-link>', new Link());
        self::assertEquals('<el-link href="http://example.com" target="_blank">Default</el-link>', Link::instance('Default')->set('href', 'http://example.com')->set('target', '_blank'));
        self::assertEquals('<el-link type="primary">Primary</el-link>', new Link('Primary', Link::TYPE_PRIMARY));
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:23
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Footer;
use PHPUnit\Framework\TestCase;

class FooterTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-footer>' . PHP_EOL . '</el-footer>', new Footer());
        self::assertEquals('<el-footer height="60px">' . PHP_EOL . '</el-footer>', new Footer('60px'));
    }
}
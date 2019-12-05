<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:47
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Image;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-image></el-image>', new Image());
    }
}
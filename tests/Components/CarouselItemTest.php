<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:24
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\CarouselItem;
use PHPUnit\Framework\TestCase;

class CarouselItemTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-carousel-item></el-carousel-item>', new CarouselItem());
    }
}
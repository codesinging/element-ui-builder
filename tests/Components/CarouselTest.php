<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:31
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Carousel;
use PHPUnit\Framework\TestCase;

class CarouselTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-carousel>' . PHP_EOL . '</el-carousel>', new Carousel());
    }

    public function testItem()
    {
        $carousel = new Carousel();
        $carousel->item();
        $carousel->item();

        self::assertEquals(
            '<el-carousel>'
            . PHP_EOL . '<el-carousel-item></el-carousel-item>'
            . PHP_EOL . '<el-carousel-item></el-carousel-item>'
            . PHP_EOL . '</el-carousel>',
            $carousel->build()
        );
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:57
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Slider;
use PHPUnit\Framework\TestCase;

class SliderTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-slider></el-slider>', new Slider());
        self::assertEquals('<el-slider v-model="number"></el-slider>', new Slider('number'));
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:07
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Timeline;
use PHPUnit\Framework\TestCase;

class TimelineTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-timeline>' . PHP_EOL . '</el-timeline>', new Timeline());
    }

    public function testItem()
    {
        $timeline = new Timeline();
        $timeline->item();
        $timeline->item();

        self::assertEquals(
            '<el-timeline>'
            . PHP_EOL . '<el-timeline-item></el-timeline-item>'
            . PHP_EOL . '<el-timeline-item></el-timeline-item>'
            . PHP_EOL . '</el-timeline>',
            $timeline->build()
        );
    }
}
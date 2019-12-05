<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:00
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\TimelineItem;
use PHPUnit\Framework\TestCase;

class TimelineItemTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-timeline-item></el-timeline-item>', new TimelineItem());
        self::assertEquals('<el-timeline-item timestamp="2018">Created</el-timeline-item>', new TimelineItem('2018','Created'));
    }
}
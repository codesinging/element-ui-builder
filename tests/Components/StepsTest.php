<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:10
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Steps;
use PHPUnit\Framework\TestCase;

class StepsTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-steps>' . PHP_EOL . '</el-steps>', new Steps());
    }

    public function testStep()
    {
        $steps = new Steps();
        $steps->step();
        $steps->step();

        self::assertEquals(
            '<el-steps>'
            . PHP_EOL . '<el-step></el-step>'
            . PHP_EOL . '<el-step></el-step>'
            . PHP_EOL . '</el-steps>',
            $steps
        );
    }
}
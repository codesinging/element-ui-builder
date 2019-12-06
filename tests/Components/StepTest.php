<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:05
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Step;
use PHPUnit\Framework\TestCase;

class StepTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-step></el-step>', new Step());
        self::assertEquals('<el-step title="Title" description="Description"></el-step>', new Step('Title', 'Description'));
    }
}
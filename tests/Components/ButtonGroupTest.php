<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:15
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Button;
use CodeSinging\ElementUiBuilder\Components\ButtonGroup;
use PHPUnit\Framework\TestCase;

class ButtonGroupTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-button-group>' . PHP_EOL . '</el-button-group>', new ButtonGroup());
    }

    public function testButton()
    {
        $group = new ButtonGroup();
        $group->button('Button');
        $group->button('Success')->set('type', Button::TYPE_SUCCESS);
        self::assertEquals(
            '<el-button-group>'
            . PHP_EOL . '<el-button>Button</el-button>'
            . PHP_EOL . '<el-button type="success">Success</el-button>'
            . PHP_EOL . '</el-button-group>',
            $group->build()
        );
    }
}
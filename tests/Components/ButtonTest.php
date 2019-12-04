<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:12
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Button;
use PHPUnit\Framework\TestCase;

class ButtonTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-button></el-button>', new Button());
        self::assertEquals('<el-button>Button</el-button>', new Button('Button'));
        self::assertEquals('<el-button type="success">Button</el-button>', new Button('Button', Button::TYPE_SUCCESS));
    }
}
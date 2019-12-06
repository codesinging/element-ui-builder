<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:53
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Dropdown;
use PHPUnit\Framework\TestCase;

class DropdownTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-dropdown>' . PHP_EOL . '</el-dropdown>', new Dropdown());
        self::assertEquals('<el-dropdown>' . PHP_EOL . 'City' . PHP_EOL . '</el-dropdown>', new Dropdown('City'));
    }

    public function testItem()
    {
        $dropdown = new Dropdown('City', ['split-button', 'type' => 'primary']);
        $dropdown->item('Beijing');
        $dropdown->item('Shanghai');

        self::assertEquals(
            '<el-dropdown split-button type="primary">'
            . PHP_EOL . 'City'
            . PHP_EOL . '<el-dropdown-menu>'
            . PHP_EOL . '<el-dropdown-item>Beijing</el-dropdown-item>'
            . PHP_EOL . '<el-dropdown-item>Shanghai</el-dropdown-item>'
            . PHP_EOL . '</el-dropdown-menu>'
            . PHP_EOL . '</el-dropdown>',
            $dropdown
        );
    }
}
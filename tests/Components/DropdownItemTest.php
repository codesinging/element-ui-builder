<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:28
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\DropdownItem;
use PHPUnit\Framework\TestCase;

class DropdownItemTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-dropdown-item></el-dropdown-item>', new DropdownItem());
        self::assertEquals('<el-dropdown-item divided></el-dropdown-item>', new DropdownItem(null, ['divided']));
        self::assertEquals('<el-dropdown-item>Beijing</el-dropdown-item>', new DropdownItem('Beijing'));
    }
}
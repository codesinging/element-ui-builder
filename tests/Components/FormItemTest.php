<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:38
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\FormItem;
use PHPUnit\Framework\TestCase;

class FormItemTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-form-item></el-form-item>', FormItem::instance());
        self::assertEquals('<el-form-item prop="name"></el-form-item>', FormItem::instance('name'));
        self::assertEquals('<el-form-item prop="name" label="Name"></el-form-item>', FormItem::instance('name', 'Name'));
        self::assertEquals('<el-form-item label="Name"></el-form-item>', FormItem::instance()->set('label', 'Name'));
    }
}
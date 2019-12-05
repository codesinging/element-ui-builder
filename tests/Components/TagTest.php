<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 17:59
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Tag;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-tag></el-tag>', new Tag());
        self::assertEquals('<el-tag>Tag</el-tag>', new Tag('Tag'));
        self::assertEquals('<el-tag type="success">Tag</el-tag>', new Tag('Tag', Tag::TYPE_SUCCESS));
    }
}
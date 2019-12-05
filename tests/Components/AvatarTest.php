<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:27
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Avatar;
use PHPUnit\Framework\TestCase;

class AvatarTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-avatar></el-avatar>', new Avatar());
    }
}
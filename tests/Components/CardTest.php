<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:13
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Card;
use PHPUnit\Framework\TestCase;

class CardTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-card>' . PHP_EOL . '</el-card>', new Card());
    }
}
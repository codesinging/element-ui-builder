<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 17:49
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Transfer;
use PHPUnit\Framework\TestCase;

class TransferTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-transfer></el-transfer>', new Transfer());
    }
}
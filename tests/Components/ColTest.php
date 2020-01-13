<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:06
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Col;
use PHPUnit\Framework\TestCase;

class ColTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-col></el-col>', (new Col()));
        self::assertEquals('<el-col :span="12"></el-col>', (new Col(12)));
        self::assertEquals('<el-col :span="12" :offset="3"></el-col>', (new Col(12, 3)));
    }
}
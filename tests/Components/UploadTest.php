<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 13:50
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Upload;
use PHPUnit\Framework\TestCase;

class UploadTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-upload>' . PHP_EOL . '</el-upload>', new Upload());
    }
}
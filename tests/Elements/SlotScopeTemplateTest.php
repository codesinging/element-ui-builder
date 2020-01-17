<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/17 11:00
 */

namespace CodeSinging\ElementUiBuilder\Tests\Elements;

use CodeSinging\ElementUiBuilder\Elements\SlotScopeTemplate;
use PHPUnit\Framework\TestCase;

class SlotScopeTemplateTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<template slot-scope="scope"></template>', new SlotScopeTemplate());
    }
}
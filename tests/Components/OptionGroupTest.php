<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:44
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Option;
use CodeSinging\ElementUiBuilder\Components\OptionGroup;
use PHPUnit\Framework\TestCase;

class OptionGroupTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-option-group>' . PHP_EOL . '</el-option-group>', new OptionGroup());
        self::assertEquals('<el-option-group label="city">' . PHP_EOL . '</el-option-group>', new OptionGroup('city'));
    }

    public function testOption()
    {
        $group = new OptionGroup('City');
        $group->option('shanghai', 'Shanghai');
        $group->option(new Option('beijing', 'Beijing'));

        self::assertEquals(
            '<el-option-group label="City">'
            . PHP_EOL . '<el-option value="shanghai" label="Shanghai"></el-option>'
            . PHP_EOL . '<el-option value="beijing" label="Beijing"></el-option>'
            . PHP_EOL . '</el-option-group>',
            $group->build()
        );
    }
}
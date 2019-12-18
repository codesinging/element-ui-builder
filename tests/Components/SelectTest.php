<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:54
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\OptionGroup;
use CodeSinging\ElementUiBuilder\Components\Select;
use PHPUnit\Framework\TestCase;

class SelectTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-select>' . PHP_EOL . '</el-select>', new Select());
        self::assertEquals('<el-select v-model="data">' . PHP_EOL . '</el-select>', new Select('data'));
    }

    public function testOptions()
    {
        $select = new Select();
        $select->options([
            ['value' => 'beijing', 'label' => 'Beijing'],
            ['value' => 'shanghai', 'label' => 'Shanghai'],
        ]);

        self::assertEquals(
            '<el-select>'
            . PHP_EOL . '<el-option value="beijing" label="Beijing"></el-option>'
            . PHP_EOL . '<el-option value="shanghai" label="Shanghai"></el-option>'
            . PHP_EOL . '</el-select>',
            $select->build()
        );
    }

    public function testOption()
    {
        $select = new Select();
        $select->option('beijing', 'Beijing');
        $select->option('shanghai', 'Shanghai');

        self::assertEquals(
            '<el-select>'
            . PHP_EOL . '<el-option value="beijing" label="Beijing"></el-option>'
            . PHP_EOL . '<el-option value="shanghai" label="Shanghai"></el-option>'
            . PHP_EOL . '</el-select>',
            $select->build()
        );
    }

    public function testOptionGroup()
    {
        $select = new Select();
        $select->optionGroup('Hot City');
        $select->optionGroup(function (OptionGroup $group) {
            $group->set('label', 'All City');
            $group->option('beijing', 'Beijing');
            $group->option('shanghai', 'Shanghai');
        });

        self::assertEquals(
            '<el-select>'
            . PHP_EOL . '<el-option-group label="Hot City">'
            . PHP_EOL . '</el-option-group>'
            . PHP_EOL . '<el-option-group label="All City">'
            . PHP_EOL . '<el-option value="beijing" label="Beijing"></el-option>'
            . PHP_EOL . '<el-option value="shanghai" label="Shanghai"></el-option>'
            . PHP_EOL . '</el-option-group>'
            . PHP_EOL . '</el-select>',
            $select->build()
        );
    }
}
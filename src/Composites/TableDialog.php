<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/16 18:12
 */

namespace CodeSinging\ElementUiBuilder\Composites;

use CodeSinging\ElementUiBuilder\Components\Table;

class TableDialog extends BaseDialog
{
    /**
     * The Table instance.
     * @var Table
     */
    public $table;

    protected function __init()
    {
        parent::__init();

        $this->table = new Table([
            'size' => 'small',
            'border' => true,
        ]);
    }

    protected function __build()
    {
        parent::__build();

        $this->add($this->table);
    }
}
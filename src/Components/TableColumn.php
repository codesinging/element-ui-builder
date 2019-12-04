<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:50
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Setters\TableColumnSetters;

class TableColumn extends ElementUi
{
    use TableColumnSetters;

    // The column type.
    const TYPE_SELECTION = 'selection';
    const TYPE_INDEX = 'index';
    const TYPE_EXPAND = 'expand';

    // The fixed.
    const FIXED_LEFT = 'left';
    const FIXED_RIGHT = 'right';

    // The alignment.
    const ALIGN_LEFT = 'left';
    const ALIGN_CENTER = 'center';
    const ALIGN_RIGHT = 'right';

    /**
     * TableColumn constructor.
     *
     * @param string|null $prop
     * @param string|null $label
     * @param array       $props
     */
    public function __construct(string $prop = null, string $label = null, array $props = [])
    {
        parent::__construct($props);
        $prop and $this->set('prop', $prop);
        $label and $this->set('label', $label);
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 13:06
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Methods\MenuItemGroupMethod;
use CodeSinging\ElementUiBuilder\Methods\MenuItemMethod;
use CodeSinging\ElementUiBuilder\Methods\SubmenuMethod;

class Menu extends ElementUi
{
    use MenuItemMethod;
    use SubmenuMethod;
    use MenuItemGroupMethod;

    // Modes
    const MODE_HORIZONTAL = 'horizontal';
    const MODE_VERTICAL = 'vertical';

    // Menu riggers
    const MENU_TRIGGER_HOVER = 'hover';
    const MENU_TRIGGER_CLICK = 'click';

    /**
     * Menu constructor.
     *
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
        $this->eol()->glue();
    }
}
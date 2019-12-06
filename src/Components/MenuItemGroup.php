<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:47
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Methods\MenuItemMethod;
use CodeSinging\ElementUiBuilder\Methods\SubmenuMethod;

class MenuItemGroup extends ElementUi
{
    use MenuItemMethod;
    use SubmenuMethod;

    /**
     * MenuItemGroup constructor.
     *
     * @param string|null $title
     * @param array       $props
     */
    public function __construct(string $title = null, array $props = [])
    {
        parent::__construct($props);
        $title and $this->set('title', $title);
        $this->eol()->glue();
    }
}
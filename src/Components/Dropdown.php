<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:18
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Dropdown extends ElementUi
{
    // Types
    const TYPE_PRIMARY = 'primary';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';
    const TYPE_TEXT = 'text';

    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    // Placements
    const PLACEMENT_TOP = 'top';
    const PLACEMENT_TOP_START = 'top-start';
    const PLACEMENT_TOP_END = 'top-end';
    const PLACEMENT_BOTTOM = 'bottom';
    const PLACEMENT_BOTTOM_START = 'bottom-start';
    const PLACEMENT_BOTTOM_END = 'bottom-end';

    // Triggers
    const TRIGGER_HOVER = 'hover';
    const TRIGGER_CLICK = 'click';

    /**
     * DropdownMenu instance.
     * @var DropdownMenu
     */
    protected $menu;

    /**
     * Dropdown constructor.
     *
     * @param string|null $content
     * @param array       $props
     */
    public function __construct(string $content = null, array $props = [])
    {
        parent::__construct($props);
        $this->add($content);
        $this->eol()->glue();

        $this->menu = new DropdownMenu();
    }

    /**
     * Add a DropdownItem.
     *
     * @param string|\Closure|DropdownItem|null $text
     * @param array                             $props
     *
     * @return DropdownItem
     */
    public function item($text = null, array $props = [])
    {
        return $this->menu->item($text, $props);
    }

    /**
     * If the DropdownMenu is not empty, then add it to the Dropdown.
     */
    protected function __build()
    {
        $this->menu->empty() or $this->add($this->menu);
    }
}
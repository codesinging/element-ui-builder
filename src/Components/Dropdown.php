<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:18
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Dropdown
 *
 * @method $this type(string $type, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this splitButton(bool $splitButton = true, $store = null)
 * @method $this placement(string $placement, $store = null)
 * @method $this trigger(string $trigger, $store = null)
 * @method $this hideOnClick(bool $hideOnClick = true, $store = null)
 * @method $this showTimeout(int $showTimeout, $store = null)
 * @method $this hideTimeout(int $hideTimeout, $store = null)
 * @method $this tabindex(int $tabindex, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Dropdown extends Component
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
     * @param string|array|null $content
     * @param array             $attributes
     */
    public function __construct($content = null, array $attributes = [])
    {
        if (is_array($content)) {
            parent::__construct($content);
        } else {
            parent::__construct($attributes);
            $this->add($content);
        }

        $this->lineBreak()->glue();
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
        $this->menu->isEmpty() or $this->add($this->menu);
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:21
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Popover
 *
 * @method $this trigger(string $trigger, $store = null)
 * @method $this content(string $content, $store = null)
 * @method $this width(string|int $width, $store = null)
 * @method $this placement(string $placement, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this offset(int $offset, $store = null)
 * @method $this transition(string $transition, $store = null)
 * @method $this visibleArrow(bool $visibleArrow = true, $store = null)
 * @method $this popperOptions(array $popperOptions, $store = null)
 * @method $this popperClass(string $popperClass, $store = null)
 * @method $this openDelay(int $openDelay, $store = null)
 * @method $this closeDelay(int $closeDelay, $store = null)
 * @method $this tabindex(int $tabindex, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Popover extends Component
{
    // Triggers
    const TRIGGER_CLICK = 'click';
    const TRIGGER_FOCUS = 'focus';
    const TRIGGER_HOVER = 'hover';
    const TRIGGER_MANUAL = 'click';

    // Placements
    const PLACEMENT_TOP = 'top';
    const PLACEMENT_TOP_START = 'top-start';
    const PLACEMENT_TOP_END = 'top-end';
    const PLACEMENT_BOTTOM = 'bottom';
    const PLACEMENT_BOTTOM_START = 'bottom-start';
    const PLACEMENT_BOTTOM_END = 'bottom-end';
    const PLACEMENT_LEFT = 'left';
    const PLACEMENT_LEFT_START = 'left-start';
    const PLACEMENT_LEFT_END = 'left-end';
    const PLACEMENT_RIGHT = 'right';
    const PLACEMENT_RIGHT_START = 'right-start';
    const PLACEMENT_RIGHT_END = 'right-end';

    /**
     * Popover constructor.
     *
     * @param string|array|null $title
     * @param string|null       $message
     * @param array             $attributes
     */
    public function __construct($title = null, string $message = null, array $attributes = [])
    {
        if (is_array($title)) {
            parent::__construct($title);
        } else {
            parent::__construct($attributes);
            $title and $this->set('title', $title);
            $message and $this->set('content', $message);
        }
    }
}
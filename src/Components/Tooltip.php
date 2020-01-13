<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:48
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Tooltip
 *
 * @method $this effect(string $effect, $store = null)
 * @method $this content(string $content, $store = null)
 * @method $this placement(string $placement, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this offset(int $offset, $store = null)
 * @method $this transition(string $transition, $store = null)
 * @method $this visibleArrow(bool $visibleArrow = true, $store = null)
 * @method $this popperOptions(array $popperOptions, $store = null)
 * @method $this openDelay(int $openDelay, $store = null)
 * @method $this manual(bool $manual = true, $store = null)
 * @method $this popperClass(string $popperClass, $store = null)
 * @method $this enterable(bool $enterable = true, $store = null)
 * @method $this hideAfter(int $hideAfter, $store = null)
 * @method $this tabindex(int $tabindex, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Tooltip extends Component
{
    // Effects
    const EFFECT_DARK = 'dark';
    const EFFECT_LIGHT = 'light';

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
     * Tooltip constructor.
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
            $content and $this->set('content', $content);
        }
    }
}
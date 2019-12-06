<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:48
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Tooltip extends ElementUi
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
     * @param string|null $message
     * @param array       $props
     */
    public function __construct(string $message=null, array $props = [])
    {
        parent::__construct($props);
        $message and $this->set('content', $message);
    }
}
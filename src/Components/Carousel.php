<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:22
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Carousel extends ElementUi
{
    // Indicator positions
    const INDICATOR_POSITION_OUTSIDE = 'outside';
    const INDICATOR_POSITION_NONE = 'none';

    // Arrows
    const ARROW_ALWAYS = 'always';
    const ARROW_HOVER = 'hover';
    const ARROW_NEVER = 'never';

    // Directions
    const DIRECTION_HORIZONTAL = 'horizontal';
    const DIRECTION_VERTICAL = 'vertical';

    /**
     * Carousel constructor.
     *
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
        $this->eol()->glue();
    }

    /**
     * Add a CarouselItem.
     *
     * @param string|null $name
     * @param string|null $label
     * @param array       $props
     *
     * @return CarouselItem
     */
    public function item(string $name = null, string $label = null, array $props = [])
    {
        if ($name instanceof \Closure) {
            $item = new CarouselItem();
            $item = call_user_func($name, $item) ?? $item;
        } elseif ($name instanceof CarouselItem) {
            $item = $name;
        } else {
            $item = new CarouselItem($name, $label, $props);
        }

        $this->add($item);

        return $item;
    }
}
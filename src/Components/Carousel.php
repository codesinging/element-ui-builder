<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:22
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Carousel
 *
 * @method $this height(string $height, $store = null)
 * @method $this initialIndex(int $initialIndex, $store = null)
 * @method $this trigger(string $trigger, $store = null)
 * @method $this autoplay(bool $autoplay = true, $store = null)
 * @method $this interval(int $interval, $store = null)
 * @method $this indicatorPosition(string $indicatorPosition, $store = null)
 * @method $this arrow(string $arrow, $store = null)
 * @method $this type(string $type, $store = null)
 * @method $this loop(bool $loop = true, $store = null)
 * @method $this directory(string $directory, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Carousel extends Component
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
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->lineBreak()->glue();
    }

    /**
     * Add a CarouselItem.
     *
     * @param string|\Closure|CarouselItem|null $name
     * @param string|null $label
     * @param array       $props
     *
     * @return CarouselItem
     */
    public function item($name = null, string $label = null, array $props = [])
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
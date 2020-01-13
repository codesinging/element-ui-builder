<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:02
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Timeline
 *
 * @method $this reverse(bool $reverse = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Timeline extends Component
{
    /**
     * Timeline constructor.
     *
     * @param bool|array|null $reverse
     * @param array           $attributes
     */
    public function __construct($reverse = null, array $attributes = [])
    {
        if (is_array($reverse)) {
            parent::__construct($reverse);
        } else {
            parent::__construct($attributes);
            is_bool($reverse) and $this->set('reverse', $reverse);
        }
        $this->lineBreak()->glue();
    }

    /**
     * Add a TimelineItem.
     *
     * @param string|\Closure|TimelineItem|null $timestamp
     * @param string|null                       $content
     * @param array                             $props
     *
     * @return TimelineItem
     */
    public function item($timestamp = null, string $content = null, array $props = [])
    {
        if ($timestamp instanceof \Closure) {
            $item = new TimelineItem();
            $item = call_user_func($timestamp, $item) ?? $item;
        } elseif ($timestamp instanceof TimelineItem) {
            $item = $timestamp;
        } else {
            $item = new TimelineItem($timestamp, $content, $props);
        }

        $this->add($item);

        return $item;
    }
}
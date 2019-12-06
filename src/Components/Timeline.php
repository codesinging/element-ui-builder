<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:02
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Timeline extends ElementUi
{
    /**
     * Timeline constructor.
     *
     * @param bool|null $reverse
     * @param array     $props
     */
    public function __construct(bool $reverse = null, array $props = [])
    {
        parent::__construct($props);
        is_bool($reverse) and $this->set('reverse', $reverse);
        $this->eol()->glue();
    }

    /**
     * Add a TimelineItem.
     *
     * @param string|\Closure|TimelineItem|null $timestamp
     * @param string|null $content
     * @param array       $props
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
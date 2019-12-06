<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:31
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class DropdownMenu extends ElementUi
{
    /**
     * DropdownMenu constructor.
     *
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
        $this->eol()->glue();
    }

    /**
     * Add a DropdownItem.
     *
     * @param string|\Closure|DropdownItem|null  $text
     * @param array $props
     *
     * @return DropdownItem
     */
    public function item($text = null, array $props = [])
    {
        if ($text instanceof \Closure) {
            $item = new DropdownItem();
            $item = call_user_func($text, $item) ?? $item;
        } elseif ($text instanceof DropdownItem) {
            $item = $text;
        } else {
            $item = new DropdownItem($text, $props);
        }

        $this->add($item);

        return $item;
    }
}
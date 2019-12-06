<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 13:29
 */

namespace CodeSinging\ElementUiBuilder\Methods;

use CodeSinging\ElementUiBuilder\Components\MenuItem;

trait MenuItemMethod
{
    /**
     * Add a MenuItem.
     *
     * @param string|\Closure|MenuItem|null $index
     * @param string|null                   $text
     * @param array                         $props
     *
     * @return MenuItem
     */
    public function menuItem($index = null, string $text = null, array $props = [])
    {
        if ($index instanceof \Closure) {
            $item = new MenuItem();
            $item = call_user_func($index, $item) ?? $item;
        } elseif ($index instanceof MenuItem) {
            $item = $index;
        } else {
            $item = new MenuItem($index, $text, $props);
        }

        $this->add($item);

        return $item;
    }
}
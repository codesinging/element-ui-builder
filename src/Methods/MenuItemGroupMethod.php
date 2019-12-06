<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 13:31
 */

namespace CodeSinging\ElementUiBuilder\Methods;

use CodeSinging\ElementUiBuilder\Components\MenuItemGroup;

trait MenuItemGroupMethod
{
    /**
     * Add a MenuItemGroup.
     *
     * @param string|\Closure|MenuItemGroup|null $title
     * @param array                              $props
     *
     * @return MenuItemGroup
     */
    public function menuItemGroup($title = null, array $props = [])
    {
        if ($title instanceof \Closure) {
            $group = new MenuItemGroup();
            $group = call_user_func($title, $group) ?? $group;
        } elseif ($title instanceof MenuItemGroup) {
            $group = $title;
        } else {
            $group = new MenuItemGroup($title, $props);
        }

        $this->add($group);

        return $group;
    }
}
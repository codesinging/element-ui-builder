<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 13:30
 */

namespace CodeSinging\ElementUiBuilder\Methods;

use CodeSinging\ElementUiBuilder\Components\Submenu;

trait SubmenuMethod
{
    /**
     * Add a Submenu.
     *
     * @param string|\Closure|Submenu|null $index
     * @param string|null                  $title
     * @param array                        $props
     *
     * @return Submenu|mixed|null
     */
    public function submenu($index = null, string $title = null, array $props = [])
    {
        if ($index instanceof \Closure) {
            $submenu = new Submenu();
            $submenu = call_user_func($index, $submenu) ?? $submenu;
        } elseif ($index instanceof Submenu) {
            $submenu = $index;
        } else {
            $submenu = new Submenu($index, $title, $props);
        }

        $this->add($submenu);

        return $submenu;
    }
}
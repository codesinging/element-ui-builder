<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:15
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Collapse extends ElementUi
{
    /**
     * Collapse constructor.
     *
     * @param string|null $model
     * @param array       $props
     */
    public function __construct(string $model = null, array $props = [])
    {
        parent::__construct($props);
        $model and $this->vModel($model);
        $this->eol()->glue();
    }

    /**
     * Add a CollapseItem.
     *
     * @param string|null $title
     * @param string|null $name
     * @param array       $props
     *
     * @return CollapseItem
     */
    public function item(string $title = null, string $name = null, array $props = [])
    {
        if ($title instanceof \Closure) {
            $item = new CollapseItem();
            $item = call_user_func($title, $item) ?? $item;
        } elseif ($title instanceof CollapseItem) {
            $item = $title;
        } else {
            $item = new CollapseItem($title, $name, $props);
        }

        $this->add($item);

        return $item;
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:23
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Setters\FormSetters;

class Form extends ElementUi
{
    use FormSetters;

    // The label positions.
    const LABEL_POSITION_LEFT = 'left';
    const LABEL_POSITION_RIGHT = 'right';
    const LABEL_POSITION_TOP = 'top';

    // The sizes.
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Form constructor.
     *
     * @param string|null $model
     * @param array       $props
     */
    public function __construct(string $model = null, array $props = [])
    {
        parent::__construct($props);
        $model and $this->set('model', '', $model);
        $this->eol();
        $this->glue();
    }

    /**
     * Add a form item.
     *
     * @param string|\Closure|FormItem|null $prop
     * @param string|null $label
     * @param array       $props
     *
     * @return FormItem
     */
    public function item($prop = null, string $label = null, array $props = [])
    {
        if (is_string($prop)) {
            $item = new FormItem($prop, $label, $props);
        } elseif ($prop instanceof \Closure) {
            $item = new FormItem();
            $item = call_user_func($prop, $item) ?? $item;
        } elseif ($prop instanceof FormItem) {
            $item = $prop;
        } else {
            $item = new FormItem();
        }

        $this->add($item);

        return $item;
    }
}
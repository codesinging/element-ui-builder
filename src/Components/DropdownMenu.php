<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:31
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Foundation\Component;

class DropdownMenu extends Component
{
    /**
     * DropdownMenu constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->lineBreak()->glue();
    }

    /**
     * Add a DropdownItem.
     *
     * @param string|array|Closure|DropdownItem|null $text
     * @param array                            $props
     *
     * @return DropdownItem
     */
    public function item($text = null, array $props = [])
    {
        if ($text instanceof Closure) {
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
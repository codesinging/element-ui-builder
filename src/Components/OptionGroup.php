<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:40
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class OptionGroup extends ElementUi
{
    /**
     * OptionGroup constructor.
     *
     * @param string|null $label
     * @param array       $props
     */
    public function __construct(string $label = null, array $props = [])
    {
        parent::__construct($props);
        $label and $this->set('label', $label);
        $this->eol()->glue();
    }

    /**
     * Add an Option.
     *
     * @param string|int|float|array|\Closure|Option|null $value
     * @param string|int|float|null       $label
     * @param array                       $props
     *
     * @return Option
     */
    public function option($value = null, $label = null, array $props = [])
    {
        if ($value instanceof \Closure) {
            $option = new Option();
            $option = call_user_func($value, $option) ?? $option;
        } elseif ($value instanceof Option) {
            $option = $value;
        } else {
            $option = new Option($value, $label, $props);
        }

        $this->add($option);

        return $option;
    }
}
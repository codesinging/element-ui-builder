<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:40
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class OptionGroup
 *
 * @method $this label(string $label, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class OptionGroup extends Component
{
    /**
     * OptionGroup constructor.
     *
     * @param string|array|null $label
     * @param array             $attributes
     */
    public function __construct($label = null, array $attributes = [])
    {
        if (is_array($label)) {
            parent::__construct($label);
        } else {
            parent::__construct($attributes);
            $label and $this->set('label', $label);
        }
        $this->lineBreak()->glue();
    }

    /**
     * Add an Option.
     *
     * @param string|int|float|array|\Closure|Option|null $value
     * @param string|int|float|null                       $label
     * @param array                                       $attributes
     *
     * @return Option
     */
    public function option($value = null, $label = null, array $attributes = [])
    {
        if ($value instanceof \Closure) {
            $option = new Option();
            $option = call_user_func($value, $option) ?? $option;
        } elseif ($value instanceof Option) {
            $option = $value;
        } else {
            $option = new Option($value, $label, $attributes);
        }

        $this->add($option);

        return $option;
    }
}
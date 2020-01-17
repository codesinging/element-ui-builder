<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:35
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Option
 *
 * @method $this value(string|int|array $value, $store = null)
 * @method $this label(string|int $label, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Option extends Component
{
    /**
     * Option constructor.
     *
     * @param string|int|float|array|null $value
     * @param string|int|float|null       $label
     * @param array                       $attributes
     */
    public function __construct($value = null, $label = null, array $attributes = null)
    {
        if (is_array($value)) {
            parent::__construct($value);
        } else {
            parent::__construct($attributes);
            is_null($value) or $this->set('value', $value);
            is_null($label) or $this->set('label', $label);
        }
    }
}
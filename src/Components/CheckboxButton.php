<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:09
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class CheckboxButton
 *
 * @method $this label(string|int|bool $label, $store = null)
 * @method $this trueLabel(int|string $trueLabel, $store = null)
 * @method $this falseLabel(int|string $falseLabel, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this name(string $name, $store = null)
 * @method $this checked(bool $checked = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class CheckboxButton extends Component
{
    /**
     * CheckboxButton constructor.
     *
     * @param string|int|float|bool|array|null $label
     * @param string|null                      $content
     * @param array                            $attributes
     */
    public function __construct($label = null, string $content = null, array $attributes = [])
    {
        if (is_array($label)) {
            parent::__construct($label);
        } else {
            parent::__construct($attributes);
            $this->add($content);
            is_null($label) or $this->set('label', $label);
        }
    }
}
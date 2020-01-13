<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:42
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class RadioButton
 *
 * @method $this label(string $label, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this name(string $name, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class RadioButton extends Component
{
    /**
     * RadioButton constructor.
     *
     * @param string|array|null $label
     * @param string|null       $content
     * @param array             $attributes
     */
    public function __construct($label = null, string $content = null, array $attributes = [])
    {
        if (is_array($label)) {
            parent::__construct($label);
        } else {
            parent::__construct($attributes);
            is_null($label) or $this->set('label', $label);
            $this->add($content);
        }
    }
}
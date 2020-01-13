<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:21
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class TabPane
 *
 * @method $this label(string $label, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this name(string $name, $store = null)
 * @method $this closable(bool $closable = true, $store = null)
 * @method $this lazy(bool $lazy = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class TabPane extends Component
{
    /**
     * TabPane constructor.
     *
     * @param string|array|null $label
     * @param string|null       $name
     * @param array             $attributes
     */
    public function __construct($label = null, string $name = null, array $attributes = [])
    {
        if (is_array($label)) {
            parent::__construct($label);
        } else {
            parent::__construct($attributes);
            $label and $this->set('label', $label);
            $name and $this->set('name', $name);
        }
    }
}
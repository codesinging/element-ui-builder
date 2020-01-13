<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:26
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class DropdownItem
 *
 * @method $this command(string|int|array $command, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this divided(bool $divided = true, $store = null)
 * @method $this icon(string $icon, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class DropdownItem extends Component
{
    /**
     * DropdownItem constructor.
     *
     * @param string|array|null $text
     * @param array             $attributes
     */
    public function __construct($text = null, array $attributes = [])
    {
        if (is_array($text)) {
            parent::__construct($text);
        } else {
            parent::__construct($attributes);
            $text and $this->add($text);
        }
    }
}
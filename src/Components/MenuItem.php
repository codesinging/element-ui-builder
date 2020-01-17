<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:35
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class MenuItem
 *
 * @method $this index(string $index, $store = null)
 * @method $this route(array $route, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class MenuItem extends Component
{
    /**
     * MenuItem constructor.
     *
     * @param string|array|null $index
     * @param string|null $text
     * @param array       $attributes
     */
    public function __construct( $index = null, string $text = null, array $attributes = null)
    {
        if (is_array($index)){
            parent::__construct($index);
        } else {
            parent::__construct($attributes);
            is_null($index) or $this->set('index', $index);
            $text and $this->add($text);
        }
    }
}
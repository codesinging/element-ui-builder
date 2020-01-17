<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:23
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class CarouselItem
 *
 * @method $this name(string $name, $store = null)
 * @method $this label(string $label, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class CarouselItem extends Component
{
    /**
     * CarouselItem constructor.
     *
     * @param string|array|null $name
     * @param string|null $label
     * @param array       $attributes
     */
    public function __construct( $name = null, string $label = null, array $attributes = null)
    {
        if (is_array($name)){
            parent::__construct($name);
        } else {
            parent::__construct($attributes);
            $name and $this->set('name', $name);
            $label and $this->set('label', $label);
        }
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:23
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class CarouselItem extends ElementUi
{
    /**
     * CarouselItem constructor.
     *
     * @param string|null $name
     * @param string|null $label
     * @param array       $props
     */
    public function __construct(string $name = null, string $label = null, array $props = [])
    {
        parent::__construct($props);
        $name and $this->set('name', $name);
        $label and $this->set('label', $label);
    }
}
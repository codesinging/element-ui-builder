<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:35
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Option extends ElementUi
{
    /**
     * Option constructor.
     *
     * @param string|int|float|array|null $value
     * @param string|int|float|null       $label
     * @param array                       $props
     */
    public function __construct($value = null, $label = null, array $props = [])
    {
        parent::__construct($props);
        $value and $this->set('value', $value);
        $label and $this->set('label', $label);
    }
}
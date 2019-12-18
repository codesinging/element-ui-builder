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
        is_null($value) or $this->set('value', $value);
        is_null($label) or $this->set('label', $label);
    }
}
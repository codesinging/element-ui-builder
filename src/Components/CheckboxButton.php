<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:09
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class CheckboxButton extends ElementUi
{
    /**
     * CheckboxButton constructor.
     *
     * @param null  $label
     * @param array $props
     */
    public function __construct($label = null, array $props = [])
    {
        parent::__construct($props);
        is_null($label) or $this->set('label', $label);
    }
}
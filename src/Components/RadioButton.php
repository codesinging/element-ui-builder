<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:42
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class RadioButton extends ElementUi
{
    /**
     * RadioButton constructor.
     *
     * @param string|null $label
     * @param array       $props
     */
    public function __construct(string $label = null, array $props = [])
    {
        parent::__construct($props);
        is_null($label) or $this->set('label', $label);
    }
}
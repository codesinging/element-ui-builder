<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:21
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class TabPane extends ElementUi
{
    /**
     * TabPane constructor.
     *
     * @param string|null $label
     * @param string|null $name
     * @param array       $props
     */
    public function __construct(string $label = null, string $name = null, array $props = [])
    {
        parent::__construct($props);
        $label and $this->set('label', $label);
        $name and $this->set('name', $name);
    }
}
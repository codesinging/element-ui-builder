<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:26
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class DropdownItem extends ElementUi
{
    /**
     * DropdownItem constructor.
     *
     * @param string|null $text
     * @param array       $props
     */
    public function __construct(string $text = null, array $props = [])
    {
        parent::__construct($props);
        $text and $this->add($text);
    }
}
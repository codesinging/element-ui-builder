<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:21
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Header extends ElementUi
{
    /**
     * Header constructor.
     *
     * @param string|null $width
     * @param array       $props
     */
    public function __construct(string $width=null, array $props = [])
    {
        parent::__construct($props);
        $width and $this->set('height', $width);
        $this->eol()->glue();
    }
}
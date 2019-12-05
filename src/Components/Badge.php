<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:17
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Badge extends ElementUi
{
    /**
     * Badge constructor.
     *
     * @param null  $value
     * @param array $props
     */
    public function __construct($value=null, array $props = [])
    {
        parent::__construct($props);
        $value and $this->bind('value', $value);
    }
}
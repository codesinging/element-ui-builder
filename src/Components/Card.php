<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:09
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Card extends ElementUi
{
    // Shadows
    const SHADOW_ALWAYS = 'always';
    const SHADOW_HOVER = 'hover';
    const SHADOW_NEVER = 'never';

    /**
     * Card constructor.
     *
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
        $this->eol()->glue();
    }
}
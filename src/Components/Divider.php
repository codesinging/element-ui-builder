<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:51
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Divider extends ElementUi
{
    // Directions
    const DIRECTION_HORIZONTAL = 'horizontal';
    const DIRECTION_VERTICAL = 'vertical';

    // Content positions
    const CONTENT_POSITION_LEFT = 'left';
    const CONTENT_POSITION_CENTER = 'center';
    const CONTENT_POSITION_RIGHT = 'right';

    /**
     * Divider constructor.
     *
     * @param string|null $content
     * @param array       $props
     */
    public function __construct(string $content=null,array $props = [])
    {
        parent::__construct($props);
        $content and $this->add($content);
    }
}
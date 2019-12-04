<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 23:56
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Setters\ColSetters;

class Col extends ElementUi
{
    use ColSetters;

    /**
     * Col constructor.
     *
     * @param int   $span
     * @param int   $offset
     * @param array $props
     */
    public function __construct(int $span = null, int $offset = null, array $props = [])
    {
        parent::__construct($props);
        $span and $this->bind('span', $span);
        $offset and $this->bind('offset', $offset);
    }
}
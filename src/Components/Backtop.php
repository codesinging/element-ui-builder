<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:41
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Backtop extends ElementUi
{
    /**
     * Backtop constructor.
     *
     * @param string|null $target
     * @param array       $props
     */
    public function __construct(string $target=null,array $props = [])
    {
        parent::__construct($props);
        $target and $this->set('target', $target);
    }
}
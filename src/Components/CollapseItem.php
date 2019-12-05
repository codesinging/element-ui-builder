<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:11
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class CollapseItem extends ElementUi
{
    /**
     * CollapseItem constructor.
     *
     * @param string|null $title
     * @param string|null $name
     * @param array       $props
     */
    public function __construct(string $title = null, string $name = null, array $props = [])
    {
        parent::__construct($props);
        $title and $this->set('title', $title);
        $name and $this->set('name', $name);
    }
}
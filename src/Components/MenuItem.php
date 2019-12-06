<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:35
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class MenuItem extends ElementUi
{
    /**
     * MenuItem constructor.
     *
     * @param string|null $index
     * @param string|null $text
     * @param array       $props
     */
    public function __construct(string $index = null, string $text = null, array $props = [])
    {
        parent::__construct($props);
        is_null($index) or $this->set('index', $index);
        $text and $this->add($text);
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:54
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Dialog extends ElementUi
{
    /**
     * Dialog constructor.
     *
     * @param string|null $title
     * @param string|null $content
     * @param array       $props
     */
    public function __construct(string $title = null, string $content = null, array $props = [])
    {
        parent::__construct($props);
        $title and $this->set('title', $title);
        $content and $this->add($content);
        $this->eol()->glue();
    }
}
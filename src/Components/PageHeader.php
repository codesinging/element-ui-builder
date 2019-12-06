<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:03
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class PageHeader extends ElementUi
{
    /**
     * PageHeader constructor.
     *
     * @param string|null $title
     * @param string|null $content
     * @param array       $props
     */
    public function __construct(string $title=null, string $content=null, array $props = [])
    {
        parent::__construct($props);
        $title and $this->set('title', $title);
        $content and $this->set('content', $content);
    }
}
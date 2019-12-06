<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:15
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class PopConfirm extends ElementUi
{
    protected $baseTag = 'popconfirm';

    /**
     * PopConfirm constructor.
     *
     * @param string|null $title
     * @param array       $props
     */
    public function __construct(string $title=null, array $props = [])
    {
        parent::__construct($props);
        $title and $this->set('title', $title);
    }
}
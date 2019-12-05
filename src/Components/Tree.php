<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:10
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Tree extends ElementUi
{
    /**
     * Tree constructor.
     *
     * @param null  $data
     * @param array $props
     */
    public function __construct($data=null, array $props = [])
    {
        parent::__construct($props);
        $data and $this->bind('data', $data);
    }
}
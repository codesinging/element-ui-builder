<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:48
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class CascaderPanel extends ElementUi
{
    /**
     * CascaderPanel constructor.
     *
     * @param string|null $model
     * @param array       $props
     */
    public function __construct(string $model=null, array $props = [])
    {
        parent::__construct($props);
        $model and $this->vModel($model);
    }
}
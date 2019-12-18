<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 17:48
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Transfer extends ElementUi
{
    /**
     * Transfer constructor.
     *
     * @param string|null $model
     * @param string|null $data
     * @param array       $props
     */
    public function __construct(string $model = null, string $data = null, array $props = [])
    {
        parent::__construct($props);
        $data and $this->bind('data', $data);
        $model and $this->vModel($model);
    }
}
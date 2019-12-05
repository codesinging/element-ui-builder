<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:03
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class TimePicker extends ElementUi
{
    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * TimePicker constructor.
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
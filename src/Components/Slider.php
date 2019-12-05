<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:55
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Slider extends ElementUi
{
    // Input sizes
    const INPUT_SIZE_MEDIUM = 'medium';
    const INPUT_SIZE_SMALL = 'small';
    const INPUT_SIZE_MINI = 'mini';

    /**
     * Slider constructor.
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
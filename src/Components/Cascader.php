<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:44
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Cascader extends ElementUi
{
    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Cascader constructor.
     *
     * @param string|null $model
     * @param string|null $options
     * @param array       $props
     */
    public function __construct(string $model = null, string $options = null, array $props = [])
    {
        parent::__construct($props);
        $options and $this->bind('options', $options);
        $model and $this->vModel($model);
    }
}
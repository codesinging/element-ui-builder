<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:35
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Radio extends ElementUi
{
    // Radio sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Radio constructor.
     *
     * @param string|null                $model
     * @param null|string|int|float|bool $label
     * @param array                      $props
     */
    public function __construct(string $model = null, $label = null, array $props = [])
    {
        parent::__construct($props);
        $model and $this->vModel($model);
        is_null($label) or $this->set('label', $label);
    }
}
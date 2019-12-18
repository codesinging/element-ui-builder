<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:04
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Checkbox extends ElementUi
{
    // Checkbox sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Checkbox constructor.
     *
     * @param string|null                $model
     * @param string|int|float|bool|null $label
     * @param string|null                $content
     * @param array                      $props
     */
    public function __construct(string $model = null, string $label = null, string $content = null, array $props = [])
    {
        parent::__construct($props);
        $model and $this->vModel($model);
        $this->add($content);
        is_null($label) or $this->set('label', $label);
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:44
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

class Cascader extends Component
{
    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Cascader constructor.
     *
     * @param string|array|null $model
     * @param string|null       $options
     * @param array             $attributes
     */
    public function __construct($model = null, string $options = null, array $attributes = null)
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $options and $this->set(':options', $options);
            $model and $this->vModel($model);
        }
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:48
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class CascaderPanel
 *
 * @method $this options(array $options, $store = null)
 * @method $this props(array $props, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class CascaderPanel extends Component
{
    /**
     * CascaderPanel constructor.
     *
     * @param string|array|null $model
     * @param array             $attributes
     */
    public function __construct($model = null, array $attributes = [])
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
        }
    }
}
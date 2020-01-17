<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 17:43
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class ColorPicker
 *
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this showAlpha(bool $showAlpha = true, $store = null)
 * @method $this colorFormat(string $colorFormat, $store = null)
 * @method $this popperClass(string $popperClass, $store = null)
 * @method $this predefine(array $predefine, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class ColorPicker extends Component
{
    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * ColorPicker constructor.
     *
     * @param string|array|null $model
     * @param array             $attributes
     */
    public function __construct($model = null, array $attributes = null)
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
        }
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:05
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class DatePicker
 *
 * @method $this readonly(bool $readonly = true, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this editable(bool $editable = true, $store = null)
 * @method $this clearable(bool $clearable = true, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this placeholder(string $placeholder, $store = null)
 * @method $this startPlaceholder(string $startPlaceholder, $store = null)
 * @method $this endPlaceholder(string $endPlaceholder, $store = null)
 * @method $this type(string $type, $store = null)
 * @method $this format(string $format, $store = null)
 * @method $this align(string $align, $store = null)
 * @method $this popperClass(string $popperClass, $store = null)
 * @method $this pickerOptions(array $pickerOptions, $store = null)
 * @method $this rangeSeparator(string $rangeSeparator, $store = null)
 * @method $this defaultValue(string $defaultValue, $store = null)
 * @method $this defaultTime(array $defaultTime, $store = null)
 * @method $this valueFormat(string $valueFormat, $store = null)
 * @method $this name(string $name, $store = null)
 * @method $this unlinkPanels(bool $unlinkPanels = true, $store = null)
 * @method $this prefixIcon(string $prefixIcon, $store = null)
 * @method $this clearIcon(string $clearIcon, $store = null)
 * @method $this validateEvent(bool $validateEvent = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class DatePicker extends Component
{
    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * DatePicker constructor.
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
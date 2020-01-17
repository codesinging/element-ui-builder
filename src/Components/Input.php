<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 23:44
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Input
 *
 * @method $this type(string $type, $store = null)
 * @method $this maxlength(int $maxlength, $store = null)
 * @method $this minlength(int $minlength, $store = null)
 * @method $this showWordLimit(bool $showWordLimit = true, $store = null)
 * @method $this placeholder(string $placeholder, $store = null)
 * @method $this clearable(bool $clearable = true, $store = null)
 * @method $this showPassword(bool $showPassword = true, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this prefixIcon(string $prefixIcon, $store = null)
 * @method $this suffixIcon(string $suffixIcon, $store = null)
 * @method $this rows(int $rows, $store = null)
 * @method $this autosize(bool|array $autosize = true, $store = null)
 * @method $this autocomplete(string $autocomplete, $store = null)
 * @method $this name(string $name, $store = null)
 * @method $this readonly(bool $readonly = true, $store = null)
 * @method $this max(int $max, $store = null)
 * @method $this min(int $min, $store = null)
 * @method $this step(int $step, $store = null)
 * @method $this resize(string $resize, $store = null)
 * @method $this autofocus(bool $autofocus = true, $store = null)
 * @method $this form(string $form, $store = null)
 * @method $this label(string $label, $store = null)
 * @method $this tabindex(string $tabindex, $store = null)
 * @method $this validateEvent(bool $validateEvent = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Input extends Component
{
    /**
     * Input constructor.
     *
     * @param string|null $model
     * @param array       $attributes
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
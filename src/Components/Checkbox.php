<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:04
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Checkbox
 *
 * @method $this label(string $label, $store = null)
 * @method $this trueLabel(string|int $trueLabel, $store = null)
 * @method $this falseLabel(string|int $falseLabel, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this border(bool $border = true, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this name(string $name, $store = null)
 * @method $this checked(bool $checked = true, $store = null)
 * @method $this indeterminate(bool $indeterminate = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Checkbox extends Component
{
    // Checkbox sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Checkbox constructor.
     *
     * @param string|array|null $model
     * @param string|null       $content
     * @param array             $attributes
     */
    public function __construct($model = null, string $content = null, array $attributes = [])
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
            $this->add($content);
        }
    }
}
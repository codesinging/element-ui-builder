<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:29
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class InputNumber
 *
 * @method $this min(int $min, $store = null)
 * @method $this max(int $max, $store = null)
 * @method $this step(int $step, $store = null)
 * @method $this stepStrictly(int $stepStrictly, $store = null)
 * @method $this precision(int $precision, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this controls(bool $controls = true, $store = null)
 * @method $this controlsPosition(string $controlsPosition, $store = null)
 * @method $this name(string $name, $store = null)
 * @method $this label(string $label, $store = null)
 * @method $this placeholder(string $placeholder, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class InputNumber extends Component
{
    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * InputNumber constructor.
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
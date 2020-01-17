<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:55
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Slider
 *
 * @method $this min(int $min, $store = null)
 * @method $this max(int $max, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this step(int $step, $store = null)
 * @method $this showInput(bool $showInput = true, $store = null)
 * @method $this showInputControls(bool $showInputControls = true, $store = null)
 * @method $this inputSize(string $inputSize, $store = null)
 * @method $this showStops(bool $showStops = true, $store = null)
 * @method $this showTooltip(bool $showTooltip = true, $store = null)
 * @method $this formatTooltip(string $formatTooltip, $store = null)
 * @method $this range(bool $range = true, $store = null)
 * @method $this vertical(bool $vertical = true, $store = null)
 * @method $this height(string $height, $store = null)
 * @method $this label(string $label, $store = null)
 * @method $this debounce(int $debounce, $store = null)
 * @method $this tooltipClass(string $tooltipClass, $store = null)
 * @method $this marks(array $marks, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Slider extends Component
{
    // Input sizes
    const INPUT_SIZE_MEDIUM = 'medium';
    const INPUT_SIZE_SMALL = 'small';
    const INPUT_SIZE_MINI = 'mini';

    /**
     * Slider constructor.
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
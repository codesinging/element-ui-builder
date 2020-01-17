<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:59
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class TimeSelect
 *
 * @method $this start(string $start, $store = null)
 * @method $this end(string $end, $store = null)
 * @method $this step(string $step, $store = null)
 * @method $this minTime(string $minTime, $store = null)
 * @method $this maxTime(string $maxTime, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class TimeSelect extends Component
{
    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * TimeSelect constructor.
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
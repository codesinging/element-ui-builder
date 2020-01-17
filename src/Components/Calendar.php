<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:49
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Calendar
 *
 * @method $this range(array $range, $store = null)
 * @method $this firstDayOfWeek(int $firstDayOfWeek, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Calendar extends Component
{
    /**
     * Calendar constructor.
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
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:58
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Steps
 *
 * @method $this space(string|int $space, $store = null)
 * @method $this direction(string $direction, $store = null)
 * @method $this active(int $active, $store = null)
 * @method $this processStatus(string $processStatus, $store = null)
 * @method $this finishStatus(string $finishStatus, $store = null)
 * @method $this alignCenter(bool $alignCenter = true, $store = null)
 * @method $this simple(bool $simple = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Steps extends Component
{
    // Directions
    const DIRECTION_VERTICAL = 'vertical';
    const DIRECTION_HORIZONTAL = 'horizontal';

    // Process status
    const PROCESS_STATUS_WAIT = 'wait';
    const PROCESS_STATUS_PROCESS = 'process';
    const PROCESS_STATUS_FINISH = 'finish';
    const PROCESS_STATUS_ERROR = 'error';
    const PROCESS_STATUS_SUCCESS = 'success';

    // Finish status
    const FINISH_STATUS_WAIT = 'wait';
    const FINISH_STATUS_PROCESS = 'process';
    const FINISH_STATUS_FINISH = 'finish';
    const FINISH_STATUS_ERROR = 'error';
    const FINISH_STATUS_SUCCESS = 'success';

    /**
     * Steps constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->lineBreak()->glue();
    }

    /**
     * Add a Step.
     *
     * @param string|\Closure|Step|null $title
     * @param string|null $description
     * @param array       $props
     *
     * @return Step
     */
    public function step($title = null, string $description = null, array $props = [])
    {
        if ($title instanceof \Closure) {
            $step = new Step();
            $step = call_user_func($title, $step) ?? $step;
        } elseif ($title instanceof Step) {
            $step = $title;
        } else {
            $step = new Step($title, $description, $props);
        }

        $this->add($step);

        return $step;
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:58
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Steps extends ElementUi
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
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
        $this->eol()->glue();
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
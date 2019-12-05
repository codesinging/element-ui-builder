<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:04
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Progress extends ElementUi
{
    // Types
    const TYPE_LINE = 'line';
    const TYPE_CIRCLE = 'circle';
    const TYPE_DASHBOARD = 'dashboard';

    // Status
    const STATUS_SUCCESS = 'success';
    const STATUS_EXCEPTION = 'exception';
    const STATUS_WARNING = 'warning';

    /**
     * Progress constructor.
     *
     * @param int|null $percentage
     * @param array    $props
     */
    public function __construct(int $percentage = null, array $props = [])
    {
        parent::__construct($props);
        is_null($percentage) or $this->bind('percentage', $percentage);
    }
}
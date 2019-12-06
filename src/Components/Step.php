<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:02
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Step extends ElementUi
{
    // Status
    const STATUS_WAIT = 'wait';
    const STATUS_PROCESS = 'process';
    const STATUS_FINISH = 'finish';
    const STATUS_ERROR = 'error';
    const STATUS_SUCCESS = 'success';

    /**
     * Step constructor.
     *
     * @param string|null $title
     * @param string|null $description
     * @param array       $props
     */
    public function __construct(string $title = null, string $description = null, array $props = [])
    {
        parent::__construct($props);
        $title and $this->set('title', $title);
        $description and $this->set('description', $description);
    }
}
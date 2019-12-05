<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:17
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Badge extends ElementUi
{
    // Types
    const TYPE_PRIMARY = 'primary';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';

    /**
     * Badge constructor.
     *
     * @param null  $value
     * @param array $props
     */
    public function __construct($value=null, array $props = [])
    {
        parent::__construct($props);
        $value and $this->bind('value', $value);
    }
}
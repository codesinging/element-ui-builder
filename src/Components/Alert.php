<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:28
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Alert extends ElementUi
{
    // Types
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';

    // Effects
    const EFFECT_LIGHT = 'light';
    const EFFECT_DARK = 'dark';

    /**
     * Alert constructor.
     *
     * @param string|null $title
     * @param string|null $type
     * @param array       $props
     */
    public function __construct(string $title=null, string $type=null,array $props = [])
    {
        parent::__construct($props);
        $title and $this->set('title', $title);
        $type and $this->set('type', $type);
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 17:56
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Tag extends ElementUi
{
    // Types
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';

    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    // Effects
    const EFFECT_DARK = 'dark';
    const EFFECT_LIGHT = 'light';
    const EFFECT_PLAIN = 'plain';

    /**
     * Tag constructor.
     *
     * @param string|null $text
     * @param string|null $type
     * @param array       $props
     */
    public function __construct(string $text = null, string $type = null, array $props = [])
    {
        parent::__construct($props);
        $text and $this->add($text);
        $type and $this->set('type', $type);
    }
}
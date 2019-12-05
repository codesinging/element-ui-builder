<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:56
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class TimelineItem extends ElementUi
{
    // Placements
    const PLACEMENT_TOP = 'top';
    const PLACEMENT_BOTTOM = 'bottom';

    // Types
    const TYPE_PRIMARY = 'primary';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';

    // Sizes
    const SIZE_NORMAL = 'normal';
    const SIZE_LARGE = 'large';

    /**
     * TimelineItem constructor.
     *
     * @param string|null $timestamp
     * @param string|null $content
     * @param array       $props
     */
    public function __construct(string $timestamp=null, string $content=null, array $props = [])
    {
        parent::__construct($props);
        $timestamp and $this->set('timestamp', $timestamp);
        $content and $this->add($content);
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:56
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class TimelineItem
 *
 * @method $this timestamp(string $timestamp, $store = null)
 * @method $this hideTimestamp(bool $hideTimestamp = true, $store = null)
 * @method $this placeholder(string $placeholder, $store = null)
 * @method $this type(string $type, $store = null)
 * @method $this color(string $color, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this icon(string $icon, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class TimelineItem extends Component
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
     * @param string|array|null $timestamp
     * @param string|null       $content
     * @param array             $attributes
     */
    public function __construct($timestamp = null, string $content = null, array $attributes = null)
    {
        if (is_array($timestamp)) {
            parent::__construct($timestamp);
        } else {
            parent::__construct($attributes);
            $timestamp and $this->set('timestamp', $timestamp);
            $content and $this->add($content);
        }
    }
}
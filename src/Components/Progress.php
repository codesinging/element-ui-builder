<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:04
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Progress
 *
 * @method $this percentage(int $percentage, $store = null)
 * @method $this type(string $type, $store = null)
 * @method $this strokeWidth(int $strokeWidth, $store = null)
 * @method $this textInside(bool $textInside = true, $store = null)
 * @method $this status(string $status, $store = null)
 * @method $this color(string|array $color, $store = null)
 * @method $this width(int $width, $store = null)
 * @method $this showText(bool $showText = true, $store = null)
 * @method $this strokeLinecap(string $strokeLinecap, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Progress extends Component
{
    // Types
    const TYPE_LINE = 'line';
    const TYPE_CIRCLE = 'circle';
    const TYPE_DASHBOARD = 'dashboard';

    // Status
    const STATUS_SUCCESS = 'success';
    const STATUS_EXCEPTION = 'exception';
    const STATUS_WARNING = 'warning';

    // Stroke Linecap
    const STROKE_LINECAP_BUTT = 'butt';
    const STROKE_LINECAP_ROUND = 'round';
    const STROKE_LINECAP_SQUARE = 'square';

    /**
     * Progress constructor.
     *
     * @param int|array|null $percentage
     * @param array          $attributes
     */
    public function __construct($percentage = null, array $attributes = [])
    {
        if (is_array($percentage)) {
            parent::__construct($percentage);
        } else {
            parent::__construct($attributes);
            is_null($percentage) or $this->set(':percentage', $percentage);
        }
    }
}
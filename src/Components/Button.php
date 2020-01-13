<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 18:50
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Button
 *
 * @method $this size(string $size, $store = null)
 * @method $this type(string $type, $store = null)
 * @method $this plain(bool $plain = true, $store = null)
 * @method $this round(bool $round = true, $store = null)
 * @method $this circle(bool $circle = true, $store = null)
 * @method $this loading(bool $loading = true, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this icon(string $icon, $store = null)
 * @method $this autofocus(bool $autofocus = true, $store = null)
 * @method $this nativeType(string $nativeType, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Button extends Component
{
    // Sizes.
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    // Types.
    const TYPE_PRIMARY = 'primary';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';
    const TYPE_TEXT = 'text';

    /**
     * Button constructor.
     *
     * @param string|null $text
     * @param string|null $type
     * @param array       $attributes
     */
    public function __construct( $text=null, string $type=null, array $attributes = [])
    {
        if (is_array($text)){
            parent::__construct($text);
        } else {
            parent::__construct($attributes);
            $text and $this->add($text);
            $type and $this->set('type', $type);
        }
    }
}
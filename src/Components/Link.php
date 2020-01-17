<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:17
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Link
 *
 * @method $this type(string $type, $store = null)
 * @method $this underline(bool $underline = true, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this href(string $href, $store = null)
 * @method $this icon(string $icon, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Link extends Component
{
    // Link types
    const TYPE_PRIMARY = 'primary';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';

    /**
     * Link constructor.
     *
     * @param string|array|null $text
     * @param string|null $type
     * @param array       $attributes
     */
    public function __construct( $text = null, string $type = null, array $attributes = null)
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
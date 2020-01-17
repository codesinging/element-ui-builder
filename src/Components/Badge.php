<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:17
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Badge
 *
 * @method $this value(string|int $value, $store = null)
 * @method $this max(int $max, $store = null)
 * @method $this isDot(bool $isDot = true, $store = null)
 * @method $this hidden(bool $hidden = true, $store = null)
 * @method $this type(string $type, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Badge extends Component
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
     * @param string|int|array|null $value
     * @param array                 $attributes
     */
    public function __construct($value = null, array $attributes = null)
    {
        if (is_array($value)) {
            parent::__construct($value);
        } else {
            parent::__construct($attributes);
            is_null($value) or $this->set('value', $value);
        }
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 15:51
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Switcher
 *
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this width(int $width, $store = null)
 * @method $this activeIconClass(string $activeIconClass, $store = null)
 * @method $this inactiveIconClass(string $inactiveIconClass, $store = null)
 * @method $this activeText(string $activeText, $store = null)
 * @method $this inactiveText(string $inactiveText, $store = null)
 * @method $this activeValue(string|bool|int $activeValue, $store = null)
 * @method $this inactiveValue(string|bool|int $inactiveValue, $store = null)
 * @method $this activeColor(string $activeColor, $store = null)
 * @method $this inactiveColor(string $inactiveColor, $store = null)
 * @method $this name(string $name, $store = null)
 * @method $this validateEvent(bool $validateEvent = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Switcher extends Component
{
    /**
     * Set base tag.
     * @var string
     */
    protected $baseTag = 'switch';

    /**
     * Switcher constructor.
     *
     * @param string|array|null $model
     * @param array       $attributes
     */
    public function __construct( $model = null, array $attributes = [])
    {
        if (is_array($model)){
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
        }
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:35
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Radio
 *
 * @method $this label(string|int|bool $label, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this border(bool $border = true, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this name(string $name, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Radio extends Component
{
    // Radio sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Radio constructor.
     *
     * @param string|array|null          $model
     * @param null|string|int|float|bool $label
     * @param string|null                $content
     * @param array                      $attributes
     */
    public function __construct($model = null, $label = null, string $content = null, array $attributes = [])
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
            is_null($label) or $this->set('label', $label);
            $this->add($content);
        }
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 17:36
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Rate
 *
 * @method $this max(int $max, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this allowHalf(bool $allowHalf = true, $store = null)
 * @method $this lowThreshold(int $lowThreshold, $store = null)
 * @method $this highThreshold(int $highThreshold, $store = null)
 * @method $this colors(array $colors, $store = null)
 * @method $this voidColor(string $voidColor, $store = null)
 * @method $this disabledVoidColor(string $disabledVoidColor, $store = null)
 * @method $this iconClasses(array $iconClasses, $store = null)
 * @method $this voidIconClass(string $voidIconClass, $store = null)
 * @method $this disabledVoidIconClass(string $disabledVoidIconClass, $store = null)
 * @method $this showText(bool $showText = true, $store = null)
 * @method $this showScore(bool $showScore = true, $store = null)
 * @method $this textColor(string $textColor, $store = null)
 * @method $this texts(array $texts, $store = null)
 * @method $this scoreTemplate(string $scoreTemplate, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Rate extends Component
{
    /**
     * Rate constructor.
     *
     * @param string|array|null $model
     * @param array             $attributes
     */
    public function __construct($model = null, array $attributes = null)
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
        }
    }
}
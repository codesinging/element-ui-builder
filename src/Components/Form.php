<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:23
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Form
 *
 * @method $this model(array $model, $store = null)
 * @method $this rules(array $rules, $store = null)
 * @method $this inline(bool $inline = true, $store = null)
 * @method $this labelPosition(string $labelPosition, $store = null)
 * @method $this labelWidth(string $labelWidth, $store = null)
 * @method $this labelSuffix(string $labelSuffix, $store = null)
 * @method $this hideRequiredAsterisk(bool $hideRequiredAsterisk = true, $store = null)
 * @method $this showMessage(bool $showMessage = true, $store = null)
 * @method $this inlineMessage(bool $inlineMessage = true, $store = null)
 * @method $this statusIcon(bool $statusIcon = true, $store = null)
 * @method $this validateOnRuleChange(bool $validateOnRuleChange = true, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Form extends Component
{
    // The label positions.
    const LABEL_POSITION_LEFT = 'left';
    const LABEL_POSITION_RIGHT = 'right';
    const LABEL_POSITION_TOP = 'top';

    // The sizes.
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Form constructor.
     *
     * @param string|array|null $model
     * @param array             $attributes
     */
    public function __construct($model = null, array $attributes = [])
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->set(':model', $model);
        }
        $this->lineBreak();
        $this->glue();
    }

    /**
     * Add a form item.
     *
     * @param string|array|Closure|FormItem|null $prop
     * @param string|null                        $label
     * @param array                              $attributes
     *
     * @return FormItem
     */
    public function item($prop = null, string $label = null, array $attributes = [])
    {
        if ($prop instanceof Closure) {
            $item = new FormItem();
            $item = call_user_func($prop, $item) ?? $item;
        } elseif ($prop instanceof FormItem) {
            $item = $prop;
        } else {
            $item = new FormItem($prop, $label, $attributes);
        }

        $this->add($item);

        return $item;
    }

}
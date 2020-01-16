<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:12
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class CheckboxGroup
 *
 * @method $this size(string $size, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this min(int $min, $store = null)
 * @method $this max(int $max, $store = null)
 * @method $this textColor(string $textColor, $store = null)
 * @method $this fill(string $fill, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class CheckboxGroup extends Component
{
    // CheckboxGroup sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Array of options.
     * @var array
     */
    protected $options;

    /**
     * If the checkbox option is Button style.
     * @var bool
     */
    protected $isButton = false;

    /**
     * CheckboxGroup constructor.
     *
     * @param string|array|null $model
     * @param array             $options
     * @param array             $attributes
     */
    public function __construct($model = null, array $options = [], array $attributes = [])
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
            $this->options($options);
            $this->glue()->lineBreak();
        }
    }

    /**
     * Set options
     *
     * @param array $options
     *
     * @return $this
     */
    public function options(array $options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * Set isButton attribute.
     *
     * @param bool $isButton
     *
     * @return $this
     */
    public function isButton(bool $isButton = true)
    {
        $this->isButton = $isButton;
        return $this;
    }

    /**
     * Add a Checkbox.
     *
     * @param string|array|Closure|Checkbox|null $label
     * @param string|null                        $content
     * @param array                              $attributes
     *
     * @return Checkbox
     */
    public function checkbox($label = null, string $content = null, array $attributes = [])
    {
        if ($label instanceof Closure) {
            $checkbox = new Checkbox(null, $content, $attributes);
            $checkbox = call_user_func($label, $checkbox) ?? $checkbox;
        } elseif ($label instanceof Checkbox) {
            $checkbox = $label->content($content)->set($attributes);
        } else {
            $checkbox = new Checkbox(null, $content, $attributes);
            $checkbox->label($label);
        }

        $this->add($checkbox);

        return $checkbox;
    }

    /**
     * Add a CheckboxButton.
     *
     * @param string|array|Closure|CheckboxButton|null $label
     * @param string|null                              $content
     * @param array                                    $attributes
     *
     * @return CheckboxButton
     */
    public function checkboxButton($label = null, string $content = null, array $attributes = [])
    {
        if ($label instanceof Closure) {
            $checkboxButton = new CheckboxButton(null, $content, $attributes);
            $checkboxButton = call_user_func($label, $checkboxButton) ?? $checkboxButton;
        } elseif ($label instanceof CheckboxButton) {
            $checkboxButton = $label->content($content)->set($attributes);
        } else {
            $checkboxButton = new CheckboxButton($label, $content, $attributes);
        }

        $this->add($checkboxButton);

        return $checkboxButton;
    }

    /**
     * Build options to Component and add them to content.
     */
    protected function __build()
    {
        $checkboxes = [];
        if ($this->options) {
            foreach ($this->options as $option) {
                if ($this->isButton) {
                    $checkboxes[] = new CheckboxButton($option['label'], $option['content'] ?? null, $option['props'] ?? []);
                } else {
                    $checkboxes[] = (new Checkbox(null, $option['content'] ?? null, $option['props'] ?? []))->label($option['label']);
                }
            }
        }
        $this->prepend($checkboxes);
    }
}
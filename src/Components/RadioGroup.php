<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:47
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class RadioGroup
 *
 * @method $this size(string $size, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this textColor(string $textColor, $store = null)
 * @method $this fill(string $fill, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class RadioGroup extends Component
{
    // Radio sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Array of options.
     * @var array
     */
    protected $options;

    /**
     * If the radio option is Button style.
     * @var bool
     */
    protected $button = false;

    /**
     * RadioGroup constructor.
     *
     * @param string|array|null $model
     * @param array             $options
     * @param array             $attributes
     */
    public function __construct($model = null, array $options = [], array $attributes = null)
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
            $this->options($options);
        }
        $this->lineBreak()->glue();
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
     * Set button attribute.
     *
     * @param bool $button
     *
     * @return $this
     */
    public function button(bool $button = true)
    {
        $this->button = $button;
        return $this;
    }

    /**
     * Add a Radio.
     *
     * @param string|\Closure|Radio|null $label
     * @param string|null                $content
     * @param array                      $attributes
     *
     * @return Radio
     */
    public function radio($label = null, string $content = null, array $attributes = null)
    {
        if ($label instanceof \Closure) {
            $radio = new Radio(null, null, $content, $attributes);
            $radio = call_user_func($label, $radio) ?? $radio;
        } elseif ($label instanceof Radio) {
            $radio = $label->add($content)->set($attributes);
        } else {
            $radio = new Radio(null, $label, $content, $attributes);
        }

        $this->add($radio);

        return $radio;
    }

    /**
     * Add a RadioButton.
     *
     * @param string|\Closure|RadioButton|null $label
     * @param string|null                      $content
     * @param array                            $attributes
     *
     * @return RadioButton
     */
    public function radioButton($label = null, string $content = null, array $attributes = null)
    {
        if ($label instanceof \Closure) {
            $radioButton = new RadioButton(null, $content, $attributes);
            $radioButton = call_user_func($label, $radioButton) ?? $radioButton;
        } elseif ($label instanceof RadioButton) {
            $radioButton = $label->add($content)->set($attributes);
        } else {
            $radioButton = new RadioButton($label, $content, $attributes);
        }

        $this->add($radioButton);

        return $radioButton;
    }

    /**
     * Build options to Component and add them to content.
     */
    protected function __build()
    {
        $radios = [];
        if ($this->options) {
            foreach ($this->options as $key => $option) {
                if ($this->button) {
                    if (is_array($option)) {
                        $radio = new RadioButton($option['label'], $option['content'] ?? null, $option['props'] ?? []);
                    } else {
                        $radio = new RadioButton($key, $option);
                    }
                } else {
                    if (is_array($option)) {
                        $radio = new Radio(null, $option['label'], $option['content'] ?? null, $option['props'] ?? []);
                    } else {
                        $radio = new Radio(null, $key, $option);
                    }
                }

                $radios[] = $radio;
            }
        }
        $this->prepend($radios);
    }
}
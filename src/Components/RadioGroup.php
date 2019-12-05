<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:47
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class RadioGroup extends ElementUi
{
    // Radio sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * RadioGroup constructor.
     *
     * @param string|null $model
     * @param array       $props
     */
    public function __construct(string $model = null, array $props = [])
    {
        parent::__construct($props);
        $model and $this->vModel($model);
        $this->eol()->glue();
    }

    /**
     * Add a Radio.
     *
     * @param string|null $label
     * @param array       $props
     *
     * @return Radio
     */
    public function radio(string $label = null, array $props = [])
    {
        if ($label instanceof \Closure) {
            $radio = new Radio();
            $radio = call_user_func($label, $radio) ?? $radio;
        } elseif ($label instanceof Radio) {
            $radio = $label;
        } else {
            $radio = new Radio(null, $label);
        }

        $this->add($radio);

        return $radio;
    }

    /**
     * Add a RadioButton.
     *
     * @param string|null $label
     * @param array       $props
     *
     * @return RadioButton
     */
    public function radioButton(string $label = null, array $props = [])
    {
        if ($label instanceof \Closure) {
            $radioButton = new RadioButton();
            $radioButton = call_user_func($label, $radioButton) ?? $radioButton;
        } elseif ($label instanceof RadioButton) {
            $radioButton = $label;
        } else {
            $radioButton = new RadioButton($label);
        }

        $this->add($radioButton);

        return $radioButton;
    }
}
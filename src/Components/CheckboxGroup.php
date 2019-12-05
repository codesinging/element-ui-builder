<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:12
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class CheckboxGroup extends ElementUi
{
    // Checkbox sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * CheckboxGroup constructor.
     *
     * @param string|null $model
     * @param array       $props
     */
    public function __construct(string $model = null, array $props = [])
    {
        parent::__construct($props);
        $model and $this->vModel($model);
        $this->glue()->eol();
    }

    /**
     * Add a Checkbox.
     *
     * @param string|null $label
     * @param array       $props
     *
     * @return Checkbox
     */
    public function checkbox(string $label = null, array $props = [])
    {
        if ($label instanceof \Closure) {
            $checkbox = new Checkbox();
            $checkbox = call_user_func($label, $checkbox) ?? $checkbox;
        } elseif ($label instanceof CheckboxButton) {
            $checkbox = $label;
        } else {
            $checkbox = new Checkbox(null, $label);
        }

        $this->add($checkbox);

        return $checkbox;
    }

    /**
     * Add a CheckboxButton.
     *
     * @param string|null $label
     * @param array       $props
     *
     * @return CheckboxButton
     */
    public function checkboxButton(string $label = null, array $props = [])
    {
        if ($label instanceof \Closure) {
            $checkboxButton = new CheckboxButton();
            $checkboxButton = call_user_func($label, $checkboxButton) ?? $checkboxButton;
        } elseif ($label instanceof CheckboxButton) {
            $checkboxButton = $label;
        } else {
            $checkboxButton = new CheckboxButton($label);
        }

        $this->add($checkboxButton);

        return $checkboxButton;
    }
}
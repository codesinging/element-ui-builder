<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:12
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class CheckboxGroup extends ElementUi
{
    // CheckboxGroup sizes
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
     * @param string|\Closure|Checkbox|null $label
     * @param string|null                   $content
     * @param array                         $props
     *
     * @return Checkbox
     */
    public function checkbox($label = null, string $content = null, array $props = [])
    {
        if ($label instanceof \Closure) {
            $checkbox = new Checkbox(null, null, $content, $props);
            $checkbox = call_user_func($label, $checkbox) ?? $checkbox;
        } elseif ($label instanceof Checkbox) {
            $checkbox = $label->add($content)->set($props);
        } else {
            $checkbox = new Checkbox(null, $label, $content, $props);
        }

        $this->add($checkbox);

        return $checkbox;
    }

    /**
     * Add a CheckboxButton.
     *
     * @param string|\Closure|CheckboxButton|null $label
     * @param string|null                         $content
     * @param array                               $props
     *
     * @return CheckboxButton
     */
    public function checkboxButton($label = null, string $content = null, array $props = [])
    {
        if ($label instanceof \Closure) {
            $checkboxButton = new CheckboxButton(null, $content, $props);
            $checkboxButton = call_user_func($label, $checkboxButton) ?? $checkboxButton;
        } elseif ($label instanceof CheckboxButton) {
            $checkboxButton = $label->add($content)->set($props);
        } else {
            $checkboxButton = new CheckboxButton($label, $content, $props);
        }

        $this->add($checkboxButton);

        return $checkboxButton;
    }
}
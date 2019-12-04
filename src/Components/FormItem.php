<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:28
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Setters\FormItemSetters;

class FormItem extends ElementUi
{
    use FormItemSetters;

    // The sizes.
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * FormItem constructor.
     *
     * @param string|null $prop
     * @param string|null $label
     * @param array       $props
     */
    public function __construct(string $prop=null, string $label=null, array $props = [])
    {
        parent::__construct($props);
        $prop and $this->set('prop', $prop);
        $label and $this->set('label', $label);
    }
}
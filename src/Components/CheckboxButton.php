<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:09
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class CheckboxButton extends ElementUi
{
    /**
     * CheckboxButton constructor.
     *
     * @param string|int|float|bool|null $label
     * @param string|null                $content
     * @param array                      $props
     */
    public function __construct($label = null, string $content = null, array $props = [])
    {
        parent::__construct($props);
        $this->add($content);
        is_null($label) or $this->set('label', $label);
    }
}
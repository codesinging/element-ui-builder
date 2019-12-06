<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:05
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Setters\ButtonGroupSetters;

class ButtonGroup extends ElementUi
{
    use ButtonGroupSetters;

    /**
     * ButtonGroup constructor.
     *
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
        $this->eol();
        $this->glue();
    }

    /**
     * Add a button to the button group.
     *
     * @param null|string|Button|Closure $text
     * @param string|null                $type
     * @param array                      $props
     *
     * @return Button
     */
    public function button($text = null, string $type = null, array $props = [])
    {
        if (is_string($text)) {
            $button = new Button($text, $type, $props);
        } elseif ($text instanceof Closure) {
            $button = new Button();
            $button = call_user_func($text, $button) ?? $button;
        } elseif ($text instanceof Button) {
            $button = $text;
        } else {
            $button = new Button();
        }

        $this->add($button);

        return $button;
    }
}
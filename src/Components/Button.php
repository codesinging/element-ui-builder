<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 18:50
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Setters\ButtonSetters;

class Button extends ElementUi
{
    use ButtonSetters;

    // The button sizes.
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    // The button types.
    const TYPE_PRIMARY = 'primary';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';
    const TYPE_TEXT = 'text';

    /**
     * Button constructor.
     *
     * @param string|null $text
     * @param string|null $type
     * @param array       $props
     */
    public function __construct(string $text=null, string $type=null, array $props = [])
    {
        parent::__construct($props);
        $text and $this->content($text);
        $type and $this->set('type', $type);
    }
}
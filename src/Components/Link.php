<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 09:17
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Setters\LinkSetters;

class Link extends ElementUi
{
    use LinkSetters;

    // Link types
    const TYPE_PRIMARY = 'primary';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';

    /**
     * Link constructor.
     *
     * @param string|null $text
     * @param string|null $type
     * @param array       $props
     */
    public function __construct(string $text = null, string $type = null, array $props = [])
    {
        parent::__construct($props);
        $text and $this->content($text);
        $type and $this->set('type', $type);
    }
}
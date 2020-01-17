<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:21
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Aside
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Aside extends Component
{
    /**
     * Aside constructor.
     *
     * @param string|null $width
     * @param array       $attributes
     */
    public function __construct($width = null, array $attributes = null)
    {
        if (is_array($width)) {
            parent::__construct($width);
        } else {
            parent::__construct($attributes);
            $width and $this->set('width', $width);
        }
        $this->lineBreak();
        $this->glue();
    }

    /**
     * Set width attribute.
     *
     * @param string|int $width
     */
    public function width($width)
    {
        is_int($width) and $width = $width . 'px';
        $this->set('width', $width);
    }
}
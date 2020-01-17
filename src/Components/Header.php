<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:21
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

class Header extends Component
{
    /**
     * Header constructor.
     *
     * @param string|int|array|null $height
     * @param array                 $attributes
     */
    public function __construct($height = null, array $attributes = null)
    {
        if (is_array($height)) {
            parent::__construct($height);
        } else {
            parent::__construct($attributes);
            $height and $this->height($height);
        }
        $this->lineBreak()->glue();
    }

    /**
     * Set height attribute.
     *
     * @param string|int $height
     */
    public function height($height)
    {
        is_int($height) and $height = $height . 'px';
        $this->set('height', $height);
    }
}
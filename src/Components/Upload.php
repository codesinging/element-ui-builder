<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 13:47
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

class Upload extends Component
{
    // List types
    const LIST_TYPE_TEXT = 'text';
    const LIST_TYPE_PICTURE = 'picture';
    const LIST_PICTURE_CARD = 'picture-card';

    /**
     * Upload constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = null)
    {
        parent::__construct($attributes);
        $this->lineBreak()->glue();
    }
}
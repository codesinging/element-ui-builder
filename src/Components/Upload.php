<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 13:47
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Upload extends ElementUi
{
    // List types
    const LIST_TYPE_TEXT = 'text';
    const LIST_TYPE_PICTURE = 'picture';
    const LIST_PICTURE_CARD = 'picture-card';

    /**
     * Upload constructor.
     *
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
        $this->eol()->glue();
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:22
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Avatar extends ElementUi
{
    // Sizes
    const SIZE_LARGE = 'large';
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';

    // Shapes
    const SHAPE_CIRCLE = 'circle';
    const SHAPE_SQUARE = 'square';

    // Fits
    const FIT_FILL = 'fill';
    const FIT_CONTAIN = 'contain';
    const FIT_COVER = 'cover';
    const FIT_NONE = 'none';
    const FIT_SCALE_DOWN = 'scale-down';

    /**
     * Avatar constructor.
     *
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
    }
}
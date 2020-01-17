<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:22
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Avatar
 *
 * @method $this icon(string $icon, $store = null)
 * @method $this size(string|int $size)
 * @method $this shape(string $shape)
 * @method $this src(string $src)
 * @method $this srcSet(string $srcSet, $store = null)
 * @method $this alt(string $alt, $store = null)
 * @method $this fit(string $fit, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Avatar extends Component
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
     * @param array $attributes
     */
    public function __construct(array $attributes = null)
    {
        parent::__construct($attributes);
    }
}
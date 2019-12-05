<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:44
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Image extends ElementUi
{
    // Fits
    const FIT_FILL = 'fill';
    const FIT_CONTAIN = 'contain';
    const FIT_COVER = 'cover';
    const FIT_NONE = 'none';
    const FIT_SCALE_DOWN = 'scale-down';

    /**
     * Image constructor.
     *
     * @param string|null $src
     * @param array       $props
     */
    public function __construct(string $src=null,array $props = [])
    {
        parent::__construct($props);
        $src and $this->set('src', $src);
    }
}
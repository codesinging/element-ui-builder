<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:44
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Image
 *
 * @method $this src(string $src, $store = null)
 * @method $this fit(string $fit, $store = null)
 * @method $this alt(array $alt, $store = null)
 * @method $this referrerPolicy(string $referrerPolicy, $store = null)
 * @method $this lazy(bool $lazy = true, $store = null)
 * @method $this scrollContainer(string $scrollContainer, $store = null)
 * @method $this previewSrcList(array $previewSrcList, $store = null)
 * @method $this zIndex(int $zIndex, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Image extends Component
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
     * @param string|array|null $src
     * @param array             $attributes
     */
    public function __construct($src = null, array $attributes = null)
    {
        if (is_array($src)) {
            parent::__construct($src);
        } else {
            parent::__construct($attributes);
            $src and $this->set('src', $src);
        }
    }
}
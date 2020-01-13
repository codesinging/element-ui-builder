<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:09
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Card
 *
 * @method $this header(string $header, $store = null)
 * @method $this bodyStyle(array $bodyStyle, $store = null)
 * @method $this shadow(string $shadow, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Card extends Component
{
    // Shadows
    const SHADOW_ALWAYS = 'always';
    const SHADOW_HOVER = 'hover';
    const SHADOW_NEVER = 'never';

    /**
     * Card constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->lineBreak()->glue();
    }
}
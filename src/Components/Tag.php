<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 17:56
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Tag
 *
 * @method $this type(string $type, $store = null)
 * @method $this closable(bool $closable = true, $store = null)
 * @method $this disableTransitions(bool $disableTransitions = true, $store = null)
 * @method $this hit(bool $hit = true, $store = null)
 * @method $this color(string $color, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this effect(string $effect, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Tag extends Component
{
    // Types
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';

    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    // Effects
    const EFFECT_DARK = 'dark';
    const EFFECT_LIGHT = 'light';
    const EFFECT_PLAIN = 'plain';

    /**
     * Tag constructor.
     *
     * @param string|array|null $text
     * @param string|null       $type
     * @param array             $attributes
     */
    public function __construct($text = null, string $type = null, array $attributes = null)
    {
        if (is_array($text)) {
            parent::__construct($text);
        } else {
            parent::__construct($attributes);
            $text and $this->add($text);
            $type and $this->set('type', $type);
        }
    }
}
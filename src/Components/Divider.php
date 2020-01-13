<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:51
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Divider
 *
 * @method $this direction(string $direction, $store = null)
 * @method $this contentPosition(string $contentPosition, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Divider extends Component
{
    // Directions
    const DIRECTION_HORIZONTAL = 'horizontal';
    const DIRECTION_VERTICAL = 'vertical';

    // Content positions
    const CONTENT_POSITION_LEFT = 'left';
    const CONTENT_POSITION_CENTER = 'center';
    const CONTENT_POSITION_RIGHT = 'right';

    /**
     * Divider constructor.
     *
     * @param string|array|null $content
     * @param array             $attributes
     */
    public function __construct($content = null, array $attributes = [])
    {
        if (is_array($content)) {
            parent::__construct($content);
        } else {
            parent::__construct($attributes);
            $content and $this->add($content);
        }
    }
}
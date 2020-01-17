<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:41
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Backtop
 *
 * @method $this target(string $target, $store = null)
 * @method $this visibilityHeight(int $visibilityHeight, $store = null)
 * @method $this right(int $right, $store = null)
 * @method $this bottom(int $bottom, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Backtop extends Component
{
    /**
     * Backtop constructor.
     *
     * @param string|array|null $target
     * @param array             $attributes
     */
    public function __construct($target = null, array $attributes = null)
    {
        if (is_array($target)) {
            parent::__construct($target);
        } else {
            parent::__construct($attributes);
            $target and $this->set('target', $target);
        }
    }
}
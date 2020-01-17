<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 23:56
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Col
 *
 * @method $this span(int $span, $store = null)
 * @method $this offset(int $offset, $store = null)
 * @method $this push(int $push, $store = null)
 * @method $this pull(int $pull, $store = null)
 * @method $this xs(int|array $xs, $store = null)
 * @method $this sm(int|array $sm, $store = null)
 * @method $this md(int|array $md, $store = null)
 * @method $this lg(int|array $lg, $store = null)
 * @method $this xl(int|array $xl, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Col extends Component
{
    /**
     * Col constructor.
     *
     * @param int|array|null $span
     * @param int            $offset
     * @param array          $attributes
     */
    public function __construct($span = null, int $offset = null, array $attributes = null)
    {
        if (is_array($span)) {
            parent::__construct($span);
        } else {
            parent::__construct($attributes);
            $span and $this->set(':span', $span);
            $offset and $this->set(':offset', $offset);
        }
    }
}
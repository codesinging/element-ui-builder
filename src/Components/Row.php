<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 23:55
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Foundation\Component;

class Row extends Component
{
    /**
     * Row constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = null)
    {
        parent::__construct($attributes);
        $this->lineBreak()->glue();
    }

    /**
     * Add a col.
     *
     * @param string|int|array|Closure|Col $span
     * @param int                          $offset
     * @param array                        $props
     *
     * @return Col
     */
    public function col($span, int $offset = 0, array $props = [])
    {
        if ($span instanceof Closure) {
            $col = new Col();
            $col = call_user_func($span, $col) ?? $col;
        } elseif ($span instanceof Col) {
            $col = $span;
        } else {
            $col = new Col($span, $offset, $props);
        }

        $this->add($col);

        return $col;
    }
}
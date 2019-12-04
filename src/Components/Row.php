<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 23:55
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Setters\RowSetters;

class Row extends ElementUi
{
    use RowSetters;

    /**
     * Row constructor.
     *
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
        $this->eol()->glue();
    }

    /**
     * Add a col.
     *
     * @param string|int|\Closure|Col $span
     * @param int                     $offset
     * @param array                   $props
     *
     * @return Col
     */
    public function col($span, int $offset = 0, array $props = [])
    {
        if ($span instanceof \Closure) {
            $col = new Col();
            $col = call_user_func($span, $col) ?? $col;
        } elseif ($span instanceof Col) {
            $col = $span;
        } else {
            $col = new Col($span, $offset, $props);
        }

        $this->content($col);

        return $col;
    }
}
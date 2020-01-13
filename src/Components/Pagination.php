<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:14
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Pagination
 *
 * @method $this small(bool $small = true, $store = null)
 * @method $this background(bool $background = true, $store = null)
 * @method $this pageSize(int $pageSize, $store = null)
 * @method $this total(int $total, $store = null)
 * @method $this pageCount(int $pageCount, $store = null)
 * @method $this pagerCount(int $pagerCount, $store = null)
 * @method $this currentPage(int $currentPage, $store = null)
 * @method $this layout(string $layout, $store = null)
 * @method $this pageSizes(array $pageSizes, $store = null)
 * @method $this popperClass(string $popperClass, $store = null)
 * @method $this prevText(string $prevText, $store = null)
 * @method $this nextText(string $nextText, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this hideOnSinglePage(bool $hideOnSinglePage = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Pagination extends Component
{
    /**
     * Pagination constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
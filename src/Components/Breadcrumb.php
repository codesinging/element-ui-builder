<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:15
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Breadcrumb extends ElementUi
{
    /**
     * Breadcrumb constructor.
     *
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
        $this->eol()->glue();
    }

    /**
     * Add a BreadcrumbItem
     *
     * @param string|\Closure|BreadcrumbItem|null $text
     * @param string|null                         $url
     * @param array                               $props
     *
     * @return BreadcrumbItem|mixed|null
     */
    public function item($text = null, string $url = null, array $props = [])
    {
        if ($text instanceof \Closure) {
            $item = new BreadcrumbItem();
            $item = call_user_func($text, $item) ?? $item;
        } elseif ($text instanceof BreadcrumbItem) {
            $item = $text;
        } else {
            $item = new BreadcrumbItem($text, $url, $props);
        }

        $this->add($item);

        return $item;
    }
}
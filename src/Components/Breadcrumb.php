<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:15
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Breadcrumb
 *
 * @method $this separator(string $separator, $store = null)
 * @method $this separatorClass(string $separatorClass, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Breadcrumb extends Component
{
    /**
     * Breadcrumb constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = null)
    {
        parent::__construct($attributes);
        $this->lineBreak()->glue();
    }

    /**
     * Add a BreadcrumbItem
     *
     * @param string|Closure|BreadcrumbItem|null $text
     * @param string|null                        $url
     * @param array                              $attributes
     *
     * @return BreadcrumbItem
     */
    public function item($text = null, string $url = null, array $attributes = null)
    {
        if ($text instanceof Closure) {
            $item = new BreadcrumbItem();
            $item = call_user_func($text, $item) ?? $item;
        } elseif ($text instanceof BreadcrumbItem) {
            $item = $text;
        } else {
            $item = new BreadcrumbItem($text, $url, $attributes);
        }

        $this->add($item);

        return $item;
    }
}
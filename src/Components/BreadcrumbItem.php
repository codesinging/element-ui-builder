<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:07
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ComponentBuilder\Builder;
use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class BreadcrumbItem
 *
 * @method $this to(string|array $to, $store = null)
 * @method $this replace(bool $replace = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class BreadcrumbItem extends Component
{
    /**
     * BreadcrumbItem text.
     * @var string
     */
    protected $text;

    /**
     * BreadcrumbItem url.
     * @var string
     */
    protected $url;

    /**
     * BreadcrumbItem constructor.
     *
     * @param string|array|null $text
     * @param string|null       $url
     * @param array             $attributes
     */
    public function __construct($text = null, string $url = null, array $attributes = [])
    {
        if (is_array($text)) {
            parent::__construct($text);
        } else {
            parent::__construct($attributes);
            $text and $this->link($text, $url);
        }
    }

    /**
     * Set a link to the breadcrumb item.
     *
     * @param string      $text
     * @param string|null $url
     *
     * @return $this
     */
    public function link(string $text, string $url = null)
    {
        $this->text = $text;
        $this->url = $url;
        return $this;
    }

    /**
     * Handle the content by the text and url.
     */
    protected function __build()
    {
        if (empty($this->url)) {
            $content = $this->text;
        } else {
            $content = new Builder('a', $this->text, ['href' => $this->url]);
        }
        $this->add($content);
    }
}
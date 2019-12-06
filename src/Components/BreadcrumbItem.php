<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:07
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ComponentBuilder\Element;
use CodeSinging\ElementUiBuilder\ElementUi;

class BreadcrumbItem extends ElementUi
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
     * @param string|null $text
     * @param string|null $url
     * @param array       $props
     */
    public function __construct(string $text = null, string $url = null, array $props = [])
    {
        parent::__construct($props);
        $this->text = $text;
        $this->url = $url;
    }

    /**
     * Handle the content by the text and url.
     */
    protected function __build()
    {
        if (empty($this->url)) {
            $content = $this->text;
        } else {
            $content = new Element('a', $this->text, ['href' => $this->url]);
        }
        $this->add($content);
    }
}
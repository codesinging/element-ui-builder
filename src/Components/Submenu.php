<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:36
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ComponentBuilder\Element;
use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Methods\MenuItemGroupMethod;
use CodeSinging\ElementUiBuilder\Methods\MenuItemMethod;
use CodeSinging\ElementUiBuilder\Methods\SubmenuMethod;

class Submenu extends ElementUi
{
    use MenuItemMethod;
    use SubmenuMethod;
    use MenuItemGroupMethod;

    /**
     * Submenu title.
     * @var string
     */
    protected $title;

    /**
     * Submenu constructor.
     *
     * @param string|null $index
     * @param string|null $title
     * @param array       $props
     */
    public function __construct(string $index = null, string $title = null, array $props = [])
    {
        parent::__construct($props);
        is_null($index) or $this->set('index', $index);
        $title and $this->title = $title;
        $this->eol()->glue();
    }

    /**
     * Handle content.
     */
    protected function __build()
    {
        $this->title and $this->prepend(new Element('template', $this->title, ['slot' => 'title']));
    }
}
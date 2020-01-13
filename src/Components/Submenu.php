<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:36
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ComponentBuilder\Builder;
use CodeSinging\ElementUiBuilder\Foundation\Component;
use CodeSinging\ElementUiBuilder\Methods\MenuItemGroupMethod;
use CodeSinging\ElementUiBuilder\Methods\MenuItemMethod;
use CodeSinging\ElementUiBuilder\Methods\SubmenuMethod;

/**
 * Class Submenu
 *
 * @method $this index(string $index, $store = null)
 * @method $this popperClass(string $popperClass, $store = null)
 * @method $this showTimeout(int $showTimeout, $store = null)
 * @method $this hideTimeout(int $hideTimeout, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this popperAppendToBody(bool $popperAppendToBody = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Submenu extends Component
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
     * @param string|array|null $index
     * @param string|null       $title
     * @param array             $attributes
     */
    public function __construct($index = null, string $title = null, array $attributes = [])
    {
        if (is_array($index)) {
            parent::__construct($index);
        } else {
            parent::__construct($attributes);
            is_null($index) or $this->set('index', $index);
            $title and $this->title = $title;
        }
        $this->lineBreak()->glue();
    }

    /**
     * Handle content.
     */
    protected function __build()
    {
        $this->title and $this->prepend(new Builder('template', $this->title, ['slot' => 'title']));
    }
}
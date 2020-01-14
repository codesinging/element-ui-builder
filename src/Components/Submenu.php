<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:36
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ComponentBuilder\Builder;
use CodeSinging\ElementUiBuilder\Foundation\Component;

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

    /**
     * Add a MenuItemGroup.
     *
     * @param string|\Closure|MenuItemGroup|null $title
     * @param array                              $attributes
     *
     * @return MenuItemGroup
     */
    public function menuItemGroup($title = null, array $attributes = [])
    {
        if ($title instanceof \Closure) {
            $group = new MenuItemGroup();
            $group = call_user_func($title, $group) ?? $group;
        } elseif ($title instanceof MenuItemGroup) {
            $group = $title;
        } else {
            $group = new MenuItemGroup($title, $attributes);
        }

        $this->add($group);

        return $group;
    }

    /**
     * Add a MenuItem.
     *
     * @param string|\Closure|MenuItem|null $index
     * @param string|null                   $text
     * @param array                         $attributes
     *
     * @return MenuItem
     */
    public function menuItem($index = null, string $text = null, array $attributes = [])
    {
        if ($index instanceof \Closure) {
            $item = new MenuItem();
            $item = call_user_func($index, $item) ?? $item;
        } elseif ($index instanceof MenuItem) {
            $item = $index;
        } else {
            $item = new MenuItem($index, $text, $attributes);
        }

        $this->add($item);

        return $item;
    }

    /**
     * Add a Submenu.
     *
     * @param string|\Closure|Submenu|null $index
     * @param string|null                  $title
     * @param array                        $attributes
     *
     * @return Submenu|mixed|null
     */
    public function submenu($index = null, string $title = null, array $attributes = [])
    {
        if ($index instanceof \Closure) {
            $submenu = new Submenu();
            $submenu = call_user_func($index, $submenu) ?? $submenu;
        } elseif ($index instanceof Submenu) {
            $submenu = $index;
        } else {
            $submenu = new Submenu($index, $title, $attributes);
        }

        $this->add($submenu);

        return $submenu;
    }
}
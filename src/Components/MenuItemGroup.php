<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:47
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class MenuItemGroup
 *
 * @method $this title(string $title, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class MenuItemGroup extends Component
{
    /**
     * MenuItemGroup constructor.
     *
     * @param string|array|null $title
     * @param array             $attributes
     */
    public function __construct($title = null, array $attributes = [])
    {
        if (is_array($title)) {
            parent::__construct($title);
        } else {
            parent::__construct($attributes);
            $title and $this->set('title', $title);
        }
        $this->lineBreak()->glue();
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
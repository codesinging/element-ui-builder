<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 13:06
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Menu
 *
 * @method $this mode(string $mode, $store = null)
 * @method $this collapse(bool $collapse = true, $store = null)
 * @method $this backgroundColor(string $backgroundColor, $store = null)
 * @method $this textColor(string $textColor, $store = null)
 * @method $this activeTextColor(string $activeTextColor, $store = null)
 * @method $this defaultActive(string $defaultActive, $store = null)
 * @method $this defaultOpeneds(array $defaultOpeneds, $store = null)
 * @method $this uniqueOpened(bool $uniqueOpened = true, $store = null)
 * @method $this menuTrigger(string $menuTrigger, $store = null)
 * @method $this router(bool $router = true, $store = null)
 * @method $this collapseTransition(bool $collapseTransition = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Menu extends Component
{
    // Modes
    const MODE_HORIZONTAL = 'horizontal';
    const MODE_VERTICAL = 'vertical';

    // Menu riggers
    const MENU_TRIGGER_HOVER = 'hover';
    const MENU_TRIGGER_CLICK = 'click';

    /**
     * Menu constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = null)
    {
        parent::__construct($attributes);
        $this->lineBreak()->glue();
    }

    /**
     * Add a MenuItemGroup.
     *
     * @param string|\Closure|MenuItemGroup|null $title
     * @param array                              $attributes
     *
     * @return MenuItemGroup
     */
    public function menuItemGroup($title = null, array $attributes = null)
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
    public function menuItem($index = null, string $text = null, array $attributes = null)
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
    public function submenu($index = null, string $title = null, array $attributes = null)
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
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 13:06
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;
use CodeSinging\ElementUiBuilder\Methods\MenuItemGroupMethod;
use CodeSinging\ElementUiBuilder\Methods\MenuItemMethod;
use CodeSinging\ElementUiBuilder\Methods\SubmenuMethod;

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
    use MenuItemMethod;
    use SubmenuMethod;
    use MenuItemGroupMethod;

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
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->lineBreak()->glue();
    }
}
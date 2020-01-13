<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:47
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;
use CodeSinging\ElementUiBuilder\Methods\MenuItemMethod;
use CodeSinging\ElementUiBuilder\Methods\SubmenuMethod;

/**
 * Class MenuItemGroup
 *
 * @method $this title(string $title, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class MenuItemGroup extends Component
{
    use MenuItemMethod;
    use SubmenuMethod;

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
}
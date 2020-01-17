<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:11
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class CollapseItem
 *
 * @method $this name(string|int $name, $store = null)
 * @method $this title(string $title, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class CollapseItem extends Component
{
    /**
     * CollapseItem constructor.
     *
     * @param string|array|null $title
     * @param string|null       $name
     * @param array             $attributes
     */
    public function __construct($title = null, string $name = null, array $attributes = null)
    {
        if (is_array($title)) {
            parent::__construct($title);
        } else {
            parent::__construct($attributes);
            $title and $this->set('title', $title);
            $name and $this->set('name', $name);
        }
    }
}
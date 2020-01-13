<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 19:15
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Collapse
 *
 * @method $this accordion(bool $accordion = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Collapse extends Component
{
    /**
     * Collapse constructor.
     *
     * @param string|array|null $model
     * @param array             $attributes
     */
    public function __construct($model = null, array $attributes = [])
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
            $this->lineBreak()->glue();
        }
    }

    /**
     * Add a CollapseItem.
     *
     * @param string|array|Closure|CollapseItem|null $title
     * @param string|null                            $name
     * @param array                                  $props
     *
     * @return CollapseItem
     */
    public function item($title = null, string $name = null, array $props = [])
    {
        if ($title instanceof Closure) {
            $item = new CollapseItem();
            $item = call_user_func($title, $item) ?? $item;
        } elseif ($title instanceof CollapseItem) {
            $item = $title;
        } else {
            $item = new CollapseItem($title, $name, $props);
        }

        $this->add($item);

        return $item;
    }
}
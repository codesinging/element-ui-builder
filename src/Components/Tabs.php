<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:24
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Tabs
 *
 * @method $this type(string $type, $store = null)
 * @method $this closable(bool $closable = true, $store = null)
 * @method $this addable(bool $addable = true, $store = null)
 * @method $this editable(bool $editable = true, $store = null)
 * @method $this tabPosition(string $tabPosition, $store = null)
 * @method $this stretch(bool $stretch = true, $store = null)
 * @method $this beforeLeave(string $beforeLeave, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Tabs extends Component
{
    // Types
    const TYPE_CARD = 'card';
    const TYPE_BORDER_CARD = 'border-card';

    // Tab positions
    const TAB_POSITION_TOP = 'top';
    const TAB_POSITION_RIGHT = 'right';
    const TAB_POSITION_BOTTOM = 'bottom';
    const TAB_POSITION_LEFT = 'left';

    /**
     * Tabs constructor.
     *
     * @param string|null $model
     * @param array       $attributes
     */
    public function __construct($model = null, array $attributes = [])
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
        }

        $this->lineBreak()->glue();
    }

    /**
     * Add a TabPane.
     *
     * @param string|\Closure|TabPane|null $label
     * @param string|null                  $name
     * @param array                        $props
     *
     * @return TabPane
     */
    public function tabPane($label = null, string $name = null, array $props = [])
    {
        if ($label instanceof \Closure) {
            $tabPane = new TabPane();
            $tabPane = call_user_func($label, $tabPane) ?? $tabPane;
        } elseif ($label instanceof TabPane) {
            $tabPane = $label;
        } else {
            $tabPane = new TabPane($label, $name, $props);
        }

        $this->add($tabPane);

        return $tabPane;
    }
}
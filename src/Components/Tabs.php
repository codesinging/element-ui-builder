<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:24
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\ElementUi;

class Tabs extends ElementUi
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
     * @param array       $props
     */
    public function __construct(string $model = null, array $props = [])
    {
        parent::__construct($props);
        $model and $this->vModel($model);
        $this->eol()->glue();
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
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:50
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class TableColumn
 *
 * @method $this type(string $type, $store = null)
 * @method $this index(int|string $index, $store = null)
 * @method $this columnKey(string $columnKey, $store = null)
 * @method $this label(string $label, $store = null)
 * @method $this prop(string $prop, $store = null)
 * @method $this width(string $width, $store = null)
 * @method $this minWidth(string $minWidth, $store = null)
 * @method $this fixed(string|bool $fixed, $store = null)
 * @method $this renderHeader(string $renderHeader, $store = null)
 * @method $this sortable(string|bool $sortable, $store = null)
 * @method $this sortMethod(string $sortMethod, $store = null)
 * @method $this sortBy(string|array $sortBy, $store = null)
 * @method $this sortOrders(array $sortOrders, $store = null)
 * @method $this showOverflowTooltip(bool $showOverflowTooltip = true, $store = null)
 * @method $this align(string $align, $store = null)
 * @method $this headerAlign(string $headerAlign, $store = null)
 * @method $this className(string $className, $store = null)
 * @method $this labelClassName(string $labelClassName, $store = null)
 * @method $this selectable(string $selectable, $store = null)
 * @method $this reserveSelection(bool $reserveSelection = true, $store = null)
 * @method $this filters(array $filters, $store = null)
 * @method $this filterPlacement(string $filterPlacement, $store = null)
 * @method $this filterMultiple(bool $filterMultiple = true, $store = null)
 * @method $this filterMethod(string $filterMethod, $store = null)
 * @method $this filteredValue(array $filteredValue, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class TableColumn extends Component
{
    // The column type.
    const TYPE_SELECTION = 'selection';
    const TYPE_INDEX = 'index';
    const TYPE_EXPAND = 'expand';

    // The fixed.
    const FIXED_LEFT = 'left';
    const FIXED_RIGHT = 'right';

    // The alignment.
    const ALIGN_LEFT = 'left';
    const ALIGN_CENTER = 'center';
    const ALIGN_RIGHT = 'right';

    /**
     * TableColumn constructor.
     *
     * @param string|array|null $prop
     * @param string|null       $label
     * @param array             $attributes
     */
    public function __construct($prop = null, string $label = null, array $attributes = [])
    {
        if (is_array($prop)) {
            parent::__construct($prop);
        } else {
            parent::__construct($attributes);
            $prop and $this->set('prop', $prop);
            $label and $this->set('label', $label);
        }
    }
}
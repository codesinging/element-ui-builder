<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:10
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Tree
 *
 * @method $this emptyText(string $emptyText, $store = null)
 * @method $this nodeKey(string $nodeKey, $store = null)
 * @method $this props(array $props, $store = null)
 * @method $this renderAfterExpand(bool $renderAfterExpand = true, $store = null)
 * @method $this load(string $load, $store = null)
 * @method $this renderContent(string $renderContent, $store = null)
 * @method $this highlightCurrent(bool $highlightCurrent = true, $store = null)
 * @method $this defaultExpandAll(bool $defaultExpandAll = true, $store = null)
 * @method $this expandOnClickNode(bool $expandOnClickNode = true, $store = null)
 * @method $this checkOnClickNode(bool $checkOnClickNode = true, $store = null)
 * @method $this autoExpandParent(bool $autoExpandParent = true, $store = null)
 * @method $this defaultExpandedKeys(array $defaultExpandedKeys, $store = null)
 * @method $this showCheckbox(bool $showCheckbox = true, $store = null)
 * @method $this checkStrictly(bool $checkStrictly = true, $store = null)
 * @method $this defaultCheckedKeys(array $defaultCheckedKeys, $store = null)
 * @method $this currentNodeKey(string|int $currentNodeKey, $store = null)
 * @method $this filterNodeMethod(string $filterNodeMethod, $store = null)
 * @method $this accordion(bool $accordion = true, $store = null)
 * @method $this indent(int $indent, $store = null)
 * @method $this iconClass(string $iconClass, $store = null)
 * @method $this lazy(bool $lazy = true, $store = null)
 * @method $this draggable(bool $draggable = true, $store = null)
 * @method $this allowDrag(string $allowDrag, $store = null)
 * @method $this allowDrop(string $allowDrop, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Tree extends Component
{
    /**
     * Tree constructor.
     *
     * @param string|array|null $data
     * @param array             $attributes
     */
    public function __construct($data = null, array $attributes = null)
    {
        if (is_array($data)) {
            parent::__construct($data);
        } else {
            parent::__construct($attributes);
            $data and $this->set(':data', $data);
        }
    }

    /**
     * Set `data` attribute.
     * @param string|array $data
     *
     * @return $this
     */
    public function data($data)
    {
        if (is_array($data)){
            $this->set('data', $data);
        } else {
            $this->set(':data', $data);
        }

        return $this;
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:52
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Composites\TableActionColumn;
use CodeSinging\ElementUiBuilder\Foundation\Component;
use CodeSinging\Support\Str;

/**
 * Class Table
 *
 * @method $this height(string|int $height, $store = null)
 * @method $this maxHeight(string|int $maxHeight, $store = null)
 * @method $this stripe(bool $stripe = true, $store = null)
 * @method $this border(bool $border = true, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this fit(bool $fit = true, $store = null)
 * @method $this showHeader(bool $showHeader = true, $store = null)
 * @method $this highlightCurrentRow(bool $highlightCurrentRow = true, $store = null)
 * @method $this currentRowKey(string|int $currentRowKey, $store = null)
 * @method $this rowClassName(string $rowClassName, $store = null)
 * @method $this rowStyle(array $rowStyle, $store = null)
 * @method $this cellClassName(string $cellClassName, $store = null)
 * @method $this cellStyle(array $cellStyle, $store = null)
 * @method $this headerRowClassName(string $headerRowClassName, $store = null)
 * @method $this headerRowStyle(array $headerRowStyle, $store = null)
 * @method $this headerCellClassName(string $headerCellClassName, $store = null)
 * @method $this headerCellStyle(array $headerCellStyle, $store = null)
 * @method $this rowKey(string $rowKey, $store = null)
 * @method $this emptyText(string $emptyText, $store = null)
 * @method $this defaultExpandAll(bool $defaultExpandAll = true, $store = null)
 * @method $this expandRowKeys(array $expandRowKeys, $store = null)
 * @method $this defaultSort(array $defaultSort, $store = null)
 * @method $this tooltipEffect(string $tooltipEffect, $store = null)
 * @method $this showSummary(bool $showSummary = true, $store = null)
 * @method $this sumText(string $sumText, $store = null)
 * @method $this summaryMethod(string $summaryMethod, $store = null)
 * @method $this spanMethod(string $spanMethod, $store = null)
 * @method $this selectOnIndeterminate(bool $selectOnIndeterminate = true, $store = null)
 * @method $this indent(int $indent, $store = null)
 * @method $this lazy(bool $lazy = true, $store = null)
 * @method $this load(string $load, $store = null)
 * @method $this treeProps(array $treeProps, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Table extends Component
{
    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Table constructor.
     *
     * @param string|array|null $data
     * @param array             $attributes
     */
    public function __construct($data = null, array $attributes = [])
    {
        if (is_array($data)) {
            parent::__construct($data);
        } else {
            parent::__construct($attributes);
            $data and $this->set(':data', $data);
        }
        $this->lineBreak()->glue();
    }

    /**
     * Set data to the table.
     *
     * @param $data
     *
     * @return $this
     */
    public function data($data)
    {
        if (is_string($data)) {
            $this->set(':data', $data);
        } elseif (is_array($data)) {
            $this->set('data', $data);
        }
        return $this;
    }

    /**
     * Add a table column.
     *
     * @param string|Closure|TableColumn|null $prop
     * @param string|null                     $label
     * @param array                           $props
     *
     * @return TableColumn
     */
    public function column($prop = null, string $label = null, array $props = [])
    {
        if ($prop instanceof Closure) {
            $column = new TableColumn();
            $column = call_user_func($prop, $column) ?? $column;
        } elseif ($prop instanceof TableColumn) {
            $column = $prop;
        } else {
            $column = new TableColumn($prop, $label, $props);
        }

        $this->add($column);

        return $column;
    }

    /**
     * Add a `selection` type column.
     *
     * @param array $props
     *
     * @return TableColumn
     */
    public function selection(array $props = [])
    {
        return $this->column()
            ->set($props)
            ->set([
                'type' => TableColumn::TYPE_SELECTION,
                'align' => TableColumn::ALIGN_CENTER,
                'width' => '60px',
            ]);
    }

    /**
     * Add a `index` type column.
     *
     * @param string|null $label
     * @param array       $props
     *
     * @return TableColumn
     */
    public function index(string $label = '#', array $props = [])
    {
        return $this->column(null, $label)
            ->set($props)
            ->set([
                'type' => TableColumn::TYPE_INDEX,
                'align' => TableColumn::ALIGN_CENTER,
                'width' => '60px',
            ]);
    }

    /**
     * Add a `expand` type column.
     *
     * @param string|null $label
     * @param array       $props
     *
     * @return TableColumn
     */
    public function expand(string $label = null, array $props = [])
    {
        return $this->column(null, $label)
            ->set($props)
            ->set([
                'type' => TableColumn::TYPE_EXPAND,
                'align' => TableColumn::ALIGN_CENTER,
                'width' => '60px',
            ]);
    }

    /**
     * Add a table column with prop 'id'.
     *
     * @param string|null $label
     * @param array       $props
     *
     * @return TableColumn
     */
    public function id(string $label = null, array $props = [])
    {
        return $this->column('id', $label ?: 'Id', $props)
            ->set([
                'align' => TableColumn::ALIGN_CENTER,
                'width' => '80px',
            ]);
    }

    /**
     * Add a TableColumn with prop `name`.
     *
     * @param string $label
     * @param array  $props
     *
     * @return TableColumn
     */
    public function name(string $label = '', array $props = [])
    {
        return $this->column('name', $label ?: '名称', $props);
    }

    /**
     * Add a TableColumn with prop `create_time`.
     *
     * @param string $label
     * @param array  $props
     *
     * @return TableColumn
     */
    public function createTime(string $label = '', array $props = [])
    {
        return $this->column('create_time', $label ?: '创建时间', $props)
            ->set('align', TableColumn::ALIGN_CENTER);
    }

    /**
     * Add a TableColumn with prop `update_time`.
     *
     * @param string $label
     * @param array  $props
     *
     * @return TableColumn
     */
    public function updateTime(string $label = '', array $props = [])
    {
        return $this->column('update_time', $label ?: '更新时间', $props)
            ->set('align', TableColumn::ALIGN_CENTER);
    }

    /**
     * Add a action column.
     *
     * @param null|string|array $label
     * @param array             $attributes
     *
     * @return TableActionColumn|mixed
     */
    public function actionColumn($label = null, array $attributes = [])
    {
        if ($label instanceof Closure) {
            $column = new TableActionColumn($attributes);
            $column = call_user_func($label, $column) ?? $column;
        } elseif ($label instanceof TableActionColumn) {
            $column = $label->set($attributes);
        } else {
            $column = new TableActionColumn($label, $attributes);
        }

        $this->add($column);

        return $column;
    }

    /**
     * The magic method to add a TableColumn.
     *
     * @param string $name
     * @param array  $arguments $arguments[0]: `label`, $argument[1]: props.
     *
     * @return TableColumn
     */
    public function __call($name, $arguments)
    {
        return $this->column($name, $arguments[0] ?? Str::studly($name), $arguments[1] ?? []);
    }
}
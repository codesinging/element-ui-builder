<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:52
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Setters\TableSetters;
use CodeSinging\Helpers\Str;

class Table extends ElementUi
{
    use TableSetters;

    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Table constructor.
     *
     * @param string|array|null $data
     * @param array             $props
     */
    public function __construct($data = null, array $props = [])
    {
        parent::__construct($props);
        $data and $this->data($data);
        $this->eol()->glue();
    }

    /**
     * Set data to the table.
     *
     * @param $data
     */
    public function data($data)
    {
        if (is_string($data)) {
            $this->bind('data', $data);
        } elseif (is_array($data)) {
            $this->set('data', $data);
        }
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
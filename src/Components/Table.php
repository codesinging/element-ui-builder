<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:52
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Composites\TableActionColumn;
use CodeSinging\ElementUiBuilder\Elements\SlotScopeTemplate;
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
    public function __construct($data = null, array $attributes = null)
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
     * @param array                           $attributes
     *
     * @return TableColumn
     */
    public function column($prop = null, string $label = null, array $attributes = null)
    {
        if ($prop instanceof Closure) {
            $column = new TableColumn();
            $column = call_user_func($prop, $column) ?? $column;
        } elseif ($prop instanceof TableColumn) {
            $column = $prop;
        } else {
            $column = new TableColumn($prop, $label, $attributes);
        }

        $this->add($column);

        return $column;
    }

    /**
     * Add a `selection` type column.
     *
     * @param array $attributes
     *
     * @return TableColumn
     */
    public function selectionColumn(array $attributes = null)
    {
        return $this->column()
            ->set($attributes)
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
     * @param array       $attributes
     *
     * @return TableColumn
     */
    public function indexColumn(string $label = '#', array $attributes = null)
    {
        return $this->column(null, $label)
            ->set($attributes)
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
     * @param array       $attributes
     *
     * @return TableColumn
     */
    public function expandColumn(string $label = null, array $attributes = null)
    {
        return $this->column(null, $label)
            ->set($attributes)
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
     * @param array       $attributes
     *
     * @return TableColumn
     */
    public function idColumn(string $label = null, array $attributes = null)
    {
        return $this->column('id', $label ?: 'Id', $attributes)
            ->set([
                'align' => TableColumn::ALIGN_CENTER,
                'width' => '80px',
            ]);
    }

    /**
     * Add a TableColumn with prop `name`.
     *
     * @param string $label
     * @param array  $attributes
     *
     * @return TableColumn
     */
    public function nameColumn(string $label = '', array $attributes = null)
    {
        return $this->column('name', $label ?: '名称', $attributes);
    }

    /**
     * Add a TableColumn with prop `create_time`.
     *
     * @param string $label
     * @param array  $attributes
     *
     * @return TableColumn
     */
    public function createTimeColumn(string $label = '', array $attributes = null)
    {
        return $this->column('create_time', $label ?: '创建时间', $attributes)
            ->set('align', TableColumn::ALIGN_CENTER);
    }

    /**
     * Add a TableColumn with prop `update_time`.
     *
     * @param string $label
     * @param array  $attributes
     *
     * @return TableColumn
     */
    public function updateTimeColumn(string $label = '', array $attributes = null)
    {
        return $this->column('update_time', $label ?: '更新时间', $attributes)
            ->set('align', TableColumn::ALIGN_CENTER);
    }

    /**
     * Add a action column.
     *
     * @param null|string|array $label
     * @param array             $attributes
     *
     * @return TableActionColumn
     */
    public function actionColumn($label = null, array $attributes = null)
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
     * Add an input column
     *
     * @param string                   $prop
     * @param string|null              $label
     * @param null|array|Closure|Input $input
     *
     * @return TableColumn
     */
    public function inputColumn(string $prop, string $label = null, $input = null)
    {
        $component = new Input();

        if (is_array($input)) {
            $component->set($input);
        } elseif ($input instanceof Closure) {
            $component = $input($component) ?? $component;
        } elseif ($input instanceof Input) {
            $component = $input;
        }

        $component->vModel('scope.row.' . $prop)
            ->set([
                'size' => 'mini',
                'v-loading' => 'statuses[scope.column.id+\'_\'+scope.row.id]',
                '@change' => 'onTableColumnChange(scope)',
            ]);

        $template = new SlotScopeTemplate($component);

        $column = $this->column($prop, $label)
            ->add($template)
            ->set('class-name', 'table-column-input');

        return $column;
    }

    /**
     * Add an InputNumber column
     *
     * @param string                         $prop
     * @param string|null                    $label
     * @param null|array|Closure|InputNumber $inputNumber
     *
     * @return TableColumn
     */
    public function inputNumberColumn(string $prop, string $label = null, $inputNumber = null)
    {
        $component = new InputNumber();

        if (is_array($inputNumber)) {
            $component->set($inputNumber);
        } elseif ($inputNumber instanceof Closure) {
            $component = $inputNumber($component) ?? $component;
        } elseif ($inputNumber instanceof Input) {
            $component = $inputNumber;
        }

        $component->vModel('scope.row.' . $prop)
            ->set([
                'size' => 'mini',
                'v-loading' => 'statuses[scope.column.id+\'_\'+scope.row.id]',
                '@change' => 'onTableColumnChange(scope)',
            ]);

        $template = new SlotScopeTemplate($component);

        $column = $this->column($prop, $label)
            ->add($template)
            ->set([
                'class-name' => 'table-column-input',
                'align' => 'center',
                'width' => '160px',
            ]);

        return $column;
    }

    /**
     * Add a tag status
     *
     * @param string                        $prop
     * @param string|null                   $label
     * @param null|string|array|Closure|Tag $tag
     *
     * @return TableColumn
     */
    public function tagColumn(string $prop, string $label = null, $tag = null)
    {
        $component = new Tag();

        if (is_string($tag)) {
            $component->type($tag);
        } elseif (is_array($tag)) {
            $component->set($tag);
        } elseif ($tag instanceof Closure) {
            $component = $tag($component) ?? $component;
        } elseif ($tag instanceof Tag) {
            $component = $tag;
        }

        $component->interpolation('scope.row.' . $prop)
            ->set(['size' => 'medium']);

        $template = new SlotScopeTemplate($component);

        $column = $this->column($prop, $label)
            ->add($template)
            ->set('class-name', 'table-column-tag');

        return $column;
    }

    /**
     * Add a status column
     *
     * @param string            $prop
     * @param string|null       $label
     * @param array             $texts
     * @param array             $types
     * @param array|Closure|Tag $tag
     *
     * @return TableColumn
     */
    public function statusColumn(string $prop, string $label = null, array $texts = [], array $types = [], $tag = null)
    {
        $texts = $texts ?: [0 => '禁用', 1 => '正常'];
        $types = $types ?: [0 => 'danger', 1 => 'success'];

        $component = new Tag();

        if (is_array($tag)) {
            $component->set($tag);
        } elseif ($tag instanceof Closure) {
            $component = $tag($component) ?? $component;
        } elseif ($tag instanceof Tag) {
            $component = $tag;
        }

        $component->config(compact('texts', 'types'))
            ->interpolation($component->configKey('texts[scope.row.' . $prop . ']'))
            ->set(':type', $component->configKey('types[scope.row.' . $prop . ']'))
            ->set('size', 'medium');

        $template = new SlotScopeTemplate($component);

        $column = $this->column($prop, $label)
            ->add($template)
            ->set([
                'class-name' => 'table-column-tag',
                'align' => 'center',
            ]);

        return $column;
    }

    /**
     * Add a switcher column.
     *
     * @param string                      $prop
     * @param string                      $label
     * @param null|array|Closure|Switcher $switcher
     *
     * @return TableColumn
     */
    public function switcherColumn(string $prop, string $label, $switcher = null)
    {
        $component = new Switcher();

        if (is_array($switcher)) {
            $component->set($switcher);
        } elseif ($switcher instanceof Closure) {
            $component = $switcher($component) ?? $component;
        } elseif ($switcher instanceof Switcher) {
            $component = $switcher;
        }

        $component->vModel('scope.row.' . $prop)
            ->set([
                'active-value' => 1,
                'inactive-value' => 0,
                'v-loading' => 'statuses[scope.column.id+\'_\'+scope.row.id]',
                '@change' => 'onTableColumnChange(scope)',
            ]);

        $template = new SlotScopeTemplate($component);

        $column = $this->column($prop, $label)
            ->add($template)
            ->set([
                'class-name' => 'table-column-switcher',
                'align' => 'center',
            ]);

        return $column;
    }

    /**
     * The magic method to set attributes or add a TableColumn.
     *
     * @param string $name
     * @param array  $arguments $arguments[0]: `label`, $argument[1]: props.
     *
     * @return Table|TableColumn
     */
    public function __call($name, $arguments)
    {
        if (Str::endsWith($name, 'Column')) {
            $name = Str::snake(Str::beforeLast($name, 'Column'));
            return $this->column($name, $arguments[0] ?? Str::studly($name), $arguments[1] ?? []);
        }

            parent::__call($name, $arguments);
            return $this;
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:23
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Foundation\Component;
use CodeSinging\Support\Str;

/**
 * Class Form
 *
 * @method $this model(array $model, $store = null)
 * @method $this rules(array $rules, $store = null)
 * @method $this inline(bool $inline = true, $store = null)
 * @method $this labelPosition(string $labelPosition, $store = null)
 * @method $this labelWidth(string $labelWidth, $store = null)
 * @method $this labelSuffix(string $labelSuffix, $store = null)
 * @method $this hideRequiredAsterisk(bool $hideRequiredAsterisk = true, $store = null)
 * @method $this showMessage(bool $showMessage = true, $store = null)
 * @method $this inlineMessage(bool $inlineMessage = true, $store = null)
 * @method $this statusIcon(bool $statusIcon = true, $store = null)
 * @method $this validateOnRuleChange(bool $validateOnRuleChange = true, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 *
 * @method FormItem radioItem(string $prop, string $label, string|int|bool|Closure|Radio $radioLabel = null, string $radioContent = null, array $attributes = null)
 * @method FormItem radioGroupItem(string $prop, string $label, array|Closure|RadioGroup $options = null, array $attributes = null)
 * @method FormItem checkboxItem(string $prop, string $label, string|Closure|Checkbox $content = null, array $attributes = null)
 * @method FormItem checkboxGroupItem(string $prop, string $label, array|Closure|CheckboxGroup $options = null, array $attributes = null)
 * @method FormItem inputItem(string $prop, string $label, array|Closure|Input $attributes = null)
 * @method FormItem inputPasswordItem(string $prop, string $label, array|Closure|InputPassword $attributes = null)
 * @method FormItem inputNumberItem(string $prop, string $label, array|Closure|InputNumber $attributes = null)
 * @method FormItem selectItem(string $prop, string $label, array|Closure|Select $options = null, array $attributes = null)
 * @method FormItem cascaderItem(string $prop, string $label, array|Closure|Cascader $options = null, array $attributes = null)
 * @method FormItem switcherItem(string $prop, string $label, array|Closure|Switcher $attributes = null)
 * @method FormItem sliderItem(string $prop, string $label, array|Closure|Slider $attributes = null)
 * @method FormItem datePickerItem(string $prop, string $label, array|Closure|DatePicker $attributes = null)
 * @method FormItem dateTimePickerItem(string $prop, string $label, array|Closure|DateTimePicker $attributes = null)
 * @method FormItem datesPickerItem(string $prop, string $label, array|Closure|DatesPicker $attributes = null)
 * @method FormItem dateRangePickerItem(string $prop, string $label, array|Closure|DateRangePicker $attributes = null)
 * @method FormItem dateTimeRangePickerItem(string $prop, string $label, array|Closure|DateTimeRangePicker $attributes = null)
 * @method FormItem weekPickerItem(string $prop, string $label, array|Closure|WeekPicker $attributes = null)
 * @method FormItem monthPickerItem(string $prop, string $label, array|Closure|MonthPicker $attributes = null)
 * @method FormItem yearPickerItem(string $prop, string $label, array|Closure|YearPicker $attributes = null)
 * @method FormItem timeSelectItem(string $prop, string $label, array|Closure|TimeSelect $attributes = null)
 * @method FormItem timePickerItem(string $prop, string $label, array|Closure|TimePicker $attributes = null)
 * @method FormItem rateItem(string $prop, string $label, array|Closure|Rate $attributes = null)
 * @method FormItem colorPicker(string $prop, string $label, array|Closure|ColorPicker $attributes = null)
 * @method FormItem transferItem(string $prop, string $label, string|array|Closure|Transfer $data = null, array $attributes = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Form extends Component
{
    // The label positions.
    const LABEL_POSITION_LEFT = 'left';
    const LABEL_POSITION_RIGHT = 'right';
    const LABEL_POSITION_TOP = 'top';

    // The sizes.
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Form constructor.
     *
     * @param string|array|null $model
     * @param array             $attributes
     */
    public function __construct($model = null, array $attributes = null)
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->set(':model', $model);
        }
        $this->lineBreak();
        $this->glue();
    }

    /**
     * Add a form item.
     *
     * @param string|array|Closure|FormItem|null $prop
     * @param string|null                        $label
     * @param array                              $attributes
     *
     * @return FormItem
     */
    public function item($prop = null, string $label = null, array $attributes = null)
    {
        if ($prop instanceof Closure) {
            $item = new FormItem();
            $item = call_user_func($prop, $item) ?? $item;
        } elseif ($prop instanceof FormItem) {
            $item = $prop;
        } else {
            $item = new FormItem($prop, $label, $attributes);
        }

        $this->add($item);

        return $item;
    }

    /**
     * Bind a component to the form item.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return FormItem
     */
    protected function itemWithComponent(string $name, array $arguments)
    {
        $class = Str::beforeLast(get_class($this), '\\') . '\\' . $name;

        $prop = array_shift($arguments);
        $label = array_shift($arguments);
        $param = array_shift($arguments);

        /** @var Component $component */
        $component = new $class();

        if ($param instanceof Closure) {
            $component = call_user_func($param, $component) ?? $component;
        } elseif ($param instanceof Component) {
            $component = $param;
        } else {
            $component = new $class(null, $param, ...$arguments);
        }

        $component->vModel($this->get('model') . '.' . $prop);

        return $this->item($prop, $label)->add($component);
    }

    /**
     * Handle dynamic calls to the builder to set attributes or add a FormItem bound with a component.
     *
     * @param $name
     * @param $arguments
     *
     * @return $this|FormItem
     */
    public function __call($name, $arguments)
    {
        if (Str::endsWith($name, 'Item')) {
            $name = Str::studly(Str::beforeLast($name, 'Item'));
            return $this->itemWithComponent($name, $arguments);
        }

        parent::__call($name, $arguments);
        return $this;
    }

}
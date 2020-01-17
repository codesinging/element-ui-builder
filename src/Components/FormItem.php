<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:28
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Foundation\Component;
use CodeSinging\ElementUiBuilder\Support\Validation;
use CodeSinging\Support\Str;

/**
 * Class FormItem
 *
 * @method $this prop(string $prop, $store = null)
 * @method $this label(string $label, $store = null)
 * @method $this labelWidth(string $labelWidth, $store = null)
 * @method $this required(bool $required = true, $store = null)
 * @method $this rules(array $rules, $store = null)
 * @method $this error(string $error, $store = null)
 * @method $this showMessage(bool $showMessage = true, $store = null)
 * @method $this inlineMessage(bool $inlineMessage = true, $store = null)
 * @method $this size(string $size, $store = null)
 *
 * @method FormItem radio($model = null, $label = null, string $content = null, array $props = [])
 * @method FormItem radioGroup($model, array $options = [], array $props = [])
 * @method FormItem checkbox($model = null, $label = null, string $content = null, array $props = [])
 * @method FormItem checkboxGroup($model, array $options = [], array $props = [])
 * @method FormItem input($model, array $props = [])
 * @method FormItem inputNumber($model, array $props = [])
 * @method FormItem select($model, array $options = [], array $props = [])
 * @method FormItem cascader($model, string $options = null, array $props = [])
 * @method FormItem switcher($model, array $props = [])
 * @method FormItem slider($model, array $props = [])
 * @method FormItem datePicker($model, array $props = [])
 * @method FormItem dateTimePicker($model, array $props = [])
 * @method FormItem datesPicker($model, array $props = [])
 * @method FormItem dateRangePicker($model, array $props = [])
 * @method FormItem dateTimeRangePicker($model, array $props = [])
 * @method FormItem weekPicker($model, array $props = [])
 * @method FormItem monthPicker($model, array $props = [])
 * @method FormItem yearPicker($model, array $props = [])
 * @method FormItem timeSelect($model, array $props = [])
 * @method FormItem timePicker($model, array $props = [])
 * @method FormItem rate($model, array $props = [])
 * @method FormItem colorPicker($model, array $props = [])
 * @method FormItem transfer($model, string $data = null, array $props = [])
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class FormItem extends Component
{
    // The sizes.
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    // Store key for default value.
    const DEFAULT_STORE_KEY = 'defaultItem';

    /**
     * The default value.
     * @var mixed
     */
    protected $default;

    /**
     * The Validate instance.
     * @var Validation
     */
    protected $validation;

    /**
     * FormItem constructor.
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

        $this->validation = new Validation();
    }

    /**
     * Handle dynamic calls to the builder to set attributes or bind a component.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return $this
     */
    public function __call($name, $arguments)
    {
        $components = [
            'radio',
            'radioGroup',
            'checkbox',
            'checkboxGroup',
            'input',
            'inputNumber',
            'select',
            'cascader',
            'switcher',
            'slider',
            'datePicker',
            'dateTimePicker',
            'datesPicker',
            'dateRangePicker',
            'dateTimeRangePicker',
            'weekPicker',
            'monthPicker',
            'yearPicker',
            'timeSelect',
            'timePicker',
            'rate',
            'colorPicker',
            'transfer',
        ];

        if (in_array($name, $components)) {
            $this->bindComponent($name, $arguments);
        } else {
            parent::__call($name, $arguments);
        }

        return $this;
    }

    /**
     * Bind a component to the form item.
     *
     * @param string $name
     * @param array  $arguments
     */
    protected function bindComponent(string $name, array $arguments)
    {
        $class = Str::beforeLast(get_class($this), '\\') . '\\' . ucfirst($name);

        $model = array_shift($arguments);


        if ($model instanceof Closure) {
            /** @var Component $component */
            $component = new $class();
            $component = call_user_func($model, $component) ?? $component;
        } elseif ($model instanceof Component) {
            $component = $model;
        } else {
            $component = new $class($model, ...$arguments);
        }

        $this->add($component);
    }

    /**
     * Add validation rule for the form item.
     *
     * @param Validation|Closure|array $rule
     * @param string                   $when
     *
     * @return $this
     */
    public function validate($rule, string $when = 'both')
    {
        if ($rule instanceof Validation) {
            $this->validation = $rule;
        } elseif ($rule instanceof Closure) {
            $this->validation = $rule($this->validation) ?? $this->validation;
        } elseif (is_array($rule)) {
            $this->validation->rule($rule);
        }

        $this->validation->when($when);

        return $this;
    }

    /**
     * Add a `add` validation rule for the item.
     *
     * @param $rule
     *
     * @return $this
     */
    public function validateWhenAdd($rule)
    {
        $this->validate($rule, 'add');
        return $this;
    }

    /**
     * Add a `edit` validation rule for the item.
     *
     * @param $rule
     *
     * @return $this
     */
    public function validateWhenEdit($rule)
    {
        $this->validate($rule, 'edit');
        return $this;
    }

    /**
     * Set the default value for the form item.
     * @param $value
     *
     * @return $this
     */
    public function default($value)
    {
        $this->default = $value;
        return $this;
    }

    protected function __build()
    {
        parent::__build();

        $this->store([
            self::DEFAULT_STORE_KEY. '.'. $this->get('prop') => $this->default,
        ]);

        if (!$this->validation->isEmpty()){
            $rules = [];

            if ($this->validation->when === 'both') {
                $rules['add'] = $rules['edit'] = $this->validation->rules();
            } elseif ($this->validation->when === 'add') {
                $rules['add'] = $this->validation->rules();
            } elseif ($this->validation->when === 'edit') {
                $rules['edit'] = $this->validation->rules();
            }

            $this->config(compact('rules'));

            $this->set(':rules', $this->configKey('[scene]'));
        }
    }
}
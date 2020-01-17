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
    public function __construct($prop = null, string $label = null, array $attributes = null)
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
     *
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
            self::DEFAULT_STORE_KEY . '.' . $this->get('prop') => $this->default,
        ]);

        if (!$this->validation->isEmpty()) {
            $rules = [];

            if ($this->validation->when === 'both') {
                $rules['add'] = $rules['edit'] = $this->validation->rules();
            } elseif ($this->validation->when === 'add') {
                $rules['add'] = $this->validation->rules();
            } elseif ($this->validation->when === 'edit') {
                $rules['edit'] = $this->validation->rules();
            }

            $this->config(compact('rules'));

            $this->set(':rules', $this->configKey('rules[scene]'));
        }
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:49
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Select
 *
 * @method $this multiple(bool $multiple = true, $store = null)
 * @method $this disabled(bool $disabled = true, $store = null)
 * @method $this valueKey(string $valueKey, $store = null)
 * @method $this size(string $size, $store = null)
 * @method $this clearable(bool $clearable = true, $store = null)
 * @method $this sollapseTags(bool $sollapseTags = true, $store = null)
 * @method $this multipleLimit(int $multipleLimit, $store = null)
 * @method $this name(string $name, $store = null)
 * @method $this autocomplete(string $autocomplete, $store = null)
 * @method $this placeholder(string $placeholder, $store = null)
 * @method $this filterable(bool $filterable = true, $store = null)
 * @method $this allowCreate(bool $allowCreate = true, $store = null)
 * @method $this filterMethod(string $filterMethod, $store = null)
 * @method $this remote(bool $remote = true, $store = null)
 * @method $this remoteMethod(string $remoteMethod, $store = null)
 * @method $this loading(bool $loading = true, $store = null)
 * @method $this loadingText(string $loadingText, $store = null)
 * @method $this noMatchText(string $noMatchText, $store = null)
 * @method $this noDataText(string $noDataText, $store = null)
 * @method $this popperClass(string $popperClass, $store = null)
 * @method $this reserveKeyword(bool $reserveKeyword = true, $store = null)
 * @method $this defaultFirstOption(bool $defaultFirstOption = true, $store = null)
 * @method $this popperAppendToBody(bool $popperAppendToBody = true, $store = null)
 * @method $this automaticDropdown(bool $automaticDropdown = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Select extends Component
{
    // Sizes
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * Array of options.
     * @var array
     */
    protected $options;

    /**
     * Select constructor.
     *
     * @param string|array|null $model
     * @param array       $options
     * @param array       $attributes
     */
    public function __construct( $model = null, array $options = [], array $attributes = null)
    {
        if (is_array($model)){
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $model and $this->vModel($model);
            $this->options($options);
        }
        $this->lineBreak()->glue();
    }

    /**
     * Set options
     *
     * @param array $options
     *
     * @return $this
     */
    public function options(array $options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * Add an Option.
     *
     * @param string|int|float|array|Closure|Option|null $value
     * @param string|int|float|null                      $label
     * @param array                                      $props
     *
     * @return Option
     */
    public function option($value = null, $label = null, array $props = [])
    {
        if ($value instanceof Closure) {
            $option = new Option();
            $option = call_user_func($value, $option) ?? $option;
        } elseif ($value instanceof Option) {
            $option = $value;
        } else {
            $option = new Option($value, $label, $props);
        }

        $this->add($option);

        return $option;
    }

    /**
     * Add an OptionGroup.
     *
     * @param string|Closure|OptionGroup|null $label
     * @param array                           $props
     *
     * @return OptionGroup
     */
    public function optionGroup($label = null, array $props = [])
    {
        if ($label instanceof Closure) {
            $optionGroup = new OptionGroup();
            $optionGroup = call_user_func($label, $optionGroup) ?? $optionGroup;
        } elseif ($label instanceof OptionGroup) {
            $optionGroup = $label;
        } else {
            $optionGroup = new OptionGroup($label, $props);
        }

        $this->add($optionGroup);

        return $optionGroup;
    }

    /**
     * Build options to Component and add them to content.
     */
    protected function __build()
    {
        $options = [];
        if ($this->options) {
            foreach ($this->options as $option) {
                $options[] = new Option($option['value'], $option['label'] ?? null, $option['props'] ?? []);
            }
        }
        $this->prepend($options);
    }
}
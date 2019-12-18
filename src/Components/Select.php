<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 10:49
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\ElementUi;

class Select extends ElementUi
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
     * @param string|null $model
     * @param array       $options
     * @param array       $props
     */
    public function __construct(string $model = null, array $options = [], array $props = [])
    {
        parent::__construct($props);
        $model and $this->vModel($model);
        $this->options($options);
        $this->eol()->glue();
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
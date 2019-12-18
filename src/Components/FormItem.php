<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/4 19:28
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ComponentBuilder\Component;
use CodeSinging\ElementUiBuilder\ElementUi;
use CodeSinging\ElementUiBuilder\Setters\FormItemSetters;
use CodeSinging\Helpers\Str;

/**
 * Class FormItem
 *
 * @method FormItem radio(string $model = null, $label = null, string $content = null, array $props = [])
 * @method FormItem radioGroup($model, array $props = [])
 * @method FormItem input($model, array $props = [])
 * @method FormItem inputNumber($model, array $props = [])
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class FormItem extends ElementUi
{
    use FormItemSetters;

    // The sizes.
    const SIZE_MEDIUM = 'medium';
    const SIZE_SMALL = 'small';
    const SIZE_MINI = 'mini';

    /**
     * FormItem constructor.
     *
     * @param string|null $prop
     * @param string|null $label
     * @param array       $props
     */
    public function __construct(string $prop = null, string $label = null, array $props = [])
    {
        parent::__construct($props);
        $prop and $this->set('prop', $prop);
        $label and $this->set('label', $label);
    }

    /**
     * Bind a form component with the FormItem.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return $this
     */
    public function __call($name, $arguments)
    {
        $name = Str::beforeLast(get_class($this), '\\') . '\\' . ucfirst($name);

        $model = array_shift($arguments);

        /** @var Component $component */
        $component = new $name(null, ...$arguments);

        if (is_string($model)) {
            $component->vModel($model);
        } elseif ($model instanceof \Closure) {
            $component = call_user_func($model, $component);
        } elseif ($model instanceof Input) {
            $component = $model;
        } elseif (is_array($model)) {
            $component->set($model);
        }

        $this->add($component);

        return $this;
    }
}
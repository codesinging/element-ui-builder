<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 17:48
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Transfer
 *
 * @method $this filterable(bool $filterable = true, $store = null)
 * @method $this filterPlaceholder(string $filterPlaceholder, $store = null)
 * @method $this filterMethod(string $filterMethod, $store = null)
 * @method $this targetOrder(string $targetOrder, $store = null)
 * @method $this titles(array $titles, $store = null)
 * @method $this buttonTexts(array $buttonTexts, $store = null)
 * @method $this renderContent(string $renderContent, $store = null)
 * @method $this format(array $format, $store = null)
 * @method $this props(array $props, $store = null)
 * @method $this leftDefaultChecked(array $leftDefaultChecked, $store = null)
 * @method $this rightDefaultChecked(array $rightDefaultChecked, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Transfer extends Component
{
    /**
     * Transfer constructor.
     *
     * @param string|array|null $model
     * @param string|null       $data
     * @param array             $attributes
     */
    public function __construct($model = null, string $data = null, array $attributes = [])
    {
        if (is_array($model)) {
            parent::__construct($model);
        } else {
            parent::__construct($attributes);
            $data and $this->set(':data', $data);
            $model and $this->vModel($model);
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
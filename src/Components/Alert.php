<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:28
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Alert
 *
 * @method $this title(string $title, $store = null)
 * @method $this type(string $type, $store = null)
 * @method $this description(string $description, $store = null)
 * @method $this closable(bool $closable = true, $store = null)
 * @method $this center(bool $center = true, $store = null)
 * @method $this closeText(string $closeText, $store = null)
 * @method $this showIcon(bool $showIcon = true, $store = null)
 * @method $this effect(string $effect, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Alert extends Component
{
    // Types
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_INFO = 'info';

    // Effects
    const EFFECT_LIGHT = 'light';
    const EFFECT_DARK = 'dark';

    /**
     * Alert constructor.
     *
     * @param string|array|null $title
     * @param string|null       $type
     * @param array             $attributes
     */
    public function __construct($title = null, string $type = null, array $attributes = [])
    {
        if (is_array($title)) {
            parent::__construct($title);
        } else {
            parent::__construct($attributes);
            $title and $this->set('title', $title);
            $type and $this->set('type', $type);
        }
    }
}
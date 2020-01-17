<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:15
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class PopConfirm
 *
 * @method $this title(string $title, $store = null)
 * @method $this confirmButtonText(string $confirmButtonText, $store = null)
 * @method $this cancelButtonText(string $cancelButtonText, $store = null)
 * @method $this confirmButtonType(string $confirmButtonType, $store = null)
 * @method $this cancelButtonType(string $cancelButtonType, $store = null)
 * @method $this icon(string $icon, $store = null)
 * @method $this iconColor(string $iconColor, $store = null)
 * @method $this hideIcon(bool $hideIcon = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class PopConfirm extends Component
{
    protected $baseTag = 'popconfirm';

    /**
     * PopConfirm constructor.
     *
     * @param string|array|null $title
     * @param array             $attributes
     */
    public function __construct($title = null, array $attributes = null)
    {
        if (is_array($title)) {
            parent::__construct($title);
        } else {
            parent::__construct($attributes);
            $title and $this->set('title', $title);
        }
    }
}
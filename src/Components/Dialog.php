<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 10:54
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Dialog
 *
 * @method $this visible(bool $visible = true, $store = null)
 * @method $this title(string $title, $store = null)
 * @method $this width(string $width, $store = null)
 * @method $this fullscreen(bool $fullscreen = true, $store = null)
 * @method $this top(string $top, $store = null)
 * @method $this modal(bool $modal = true, $store = null)
 * @method $this modalAppendToBody(bool $modalAppendToBody = true, $store = null)
 * @method $this appendToBody(bool $appendToBody = true, $store = null)
 * @method $this lockScroll(bool $lockScroll = true, $store = null)
 * @method $this customClass(string $customClass, $store = null)
 * @method $this closeOnClickModal(bool $closeOnClickModal = true, $store = null)
 * @method $this closeOnPressEscape(bool $closeOnPressEscape = true, $store = null)
 * @method $this showClose(bool $showClose = true, $store = null)
 * @method $this beforeClose(string $beforeClose, $store = null)
 * @method $this center(bool $center = true, $store = null)
 * @method $this destroyOnClose(bool $destroyOnClose = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Dialog extends Component
{
    /**
     * Dialog constructor.
     *
     * @param string|array|null $title
     * @param string|null       $sync
     * @param array             $attributes
     */
    public function __construct($title = null, string $sync = null, array $attributes = [])
    {
        if (is_array($title)) {
            parent::__construct($title);
        } else {
            parent::__construct($attributes);
            $title and $this->set('title', $title);
            $sync and $this->set(':visible.sync', $sync);
            $this->lineBreak()->glue();
        }
    }

    /**
     * Set `visible.sync` attribute.
     *
     * @param bool $visible
     * @param null $store
     *
     * @return $this
     */
    public function visibleSync(bool $visible = true, $store = null)
    {
        $this->set(':visible.sync', $visible, $store);
        return $this;
    }
}
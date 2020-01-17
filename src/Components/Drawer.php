<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 18:35
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Drawer
 *
 * @method $this appendToBody(bool $appendToBody = true, $store = null)
 * @method $this beforeClose(string $beforeClose, $store = null)
 * @method $this closeOnPressEscape(bool $closeOnPressEscape = true, $store = null)
 * @method $this customClass(string $customClass, $store = null)
 * @method $this destroyOnClose(bool $destroyOnClose = true, $store = null)
 * @method $this modal(bool $modal = true, $store = null)
 * @method $this modalAppendToBody(bool $modalAppendToBody = true, $store = null)
 * @method $this direction(string $direction, $store = null)
 * @method $this showClose(bool $showClose = true, $store = null)
 * @method $this size(string|int $size, $store = null)
 * @method $this title(string $title, $store = null)
 * @method $this visible(bool $visible = true, $store = null)
 * @method $this wrapperClosable(bool $wrapperClosable = true, $store = null)
 * @method $this withHeader(bool $withHeader = true, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Drawer extends Component
{
    // Directions
    const DIRECTION_RIGHT_TO_LEFT = 'rtl';
    const DIRECTION_LEFT_TO_RIGHT = 'ltr';
    const DIRECTION_TOP_TO_BOTTOM = 'ttb';
    const DIRECTION_BOTTOM_TO_TOP = 'btt';

    /**
     * Drawer constructor.
     *
     * @param string|array|null $visibleSync
     * @param array             $attributes
     */
    public function __construct($visibleSync = null, array $attributes = null)
    {
        if (is_array($visibleSync)) {
            parent::__construct($visibleSync);
        } else {
            $visibleSync and $this->set(':visible.sync', $visibleSync);
            parent::__construct($attributes);
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
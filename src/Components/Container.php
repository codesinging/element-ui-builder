<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:29
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\ElementUi;

class Container extends ElementUi
{
    /**
     * Container constructor.
     *
     * @param array $props
     */
    public function __construct(array $props = [])
    {
        parent::__construct($props);
        $this->eol()->glue();
    }

    /**
     * Add a container.
     *
     * @param array|Closure|Container $props
     *
     * @return Container
     */
    public function container($props = [])
    {
        if ($props instanceof Closure) {
            $container = new self();
            $container = call_user_func($props, $container) ?? $container;
        } elseif ($props instanceof self) {
            $container = $props;
        } else {
            $container = new self($props);
        }

        $this->content($container);

        return $container;
    }

    /**
     * Add a Header.
     *
     * @param string|Closure|Header|null $height
     * @param array                      $props
     *
     * @return Header
     */
    public function header($height = null, array $props = [])
    {
        if ($height instanceof Closure) {
            $header = new Header();
            $header = call_user_func($height, $header) ?? $header;
        } elseif ($height instanceof Header) {
            $header = $height;
        } else {
            $header = new Header($height, $props);
        }

        $this->content($header);

        return $header;
    }

    /**
     * Add a Footer.
     *
     * @param string|Closure|Footer|null $height
     * @param array                      $props
     *
     * @return Footer
     */
    public function footer($height = null, array $props = [])
    {
        if ($height instanceof Closure) {
            $footer = new Footer();
            $footer = call_user_func($height, $footer) ?? $footer;
        } elseif ($height instanceof Header) {
            $footer = $height;
        } else {
            $footer = new Footer($height, $props);
        }

        $this->content($footer);

        return $footer;
    }

    /**
     * Add a Aside.
     *
     * @param string|Closure|Aside|null $width
     * @param array                     $props
     *
     * @return Aside
     */
    public function aside($width = null, array $props = [])
    {
        if ($width instanceof Closure) {
            $aside = new Aside();
            $aside = call_user_func($width, $aside) ?? $aside;
        } elseif ($width instanceof Header) {
            $aside = $width;
        } else {
            $aside = new Aside($width, $props);
        }

        $this->content($aside);

        return $aside;
    }

    /**
     * Add a Main.
     *
     * @param array|Closure|Main $props
     *
     * @return Main
     */
    public function main($props = [])
    {
        if ($props instanceof Closure) {
            $main = new Main();
            $main = call_user_func($props, $main) ?? $main;
        } elseif ($props instanceof Header) {
            $main = $props;
        } else {
            $main = new Main($props);
        }

        $this->content($main);

        return $main;
    }
}
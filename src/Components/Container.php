<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:29
 */

namespace CodeSinging\ElementUiBuilder\Components;

use Closure;
use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Container
 *
 * @method $this direction(string $direction, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Container extends Component
{
    /**
     * Container constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = null)
    {
        parent::__construct($attributes);
        $this->lineBreak()->glue();
    }

    /**
     * Add a container.
     *
     * @param array|Closure|Container $attributes
     *
     * @return Container
     */
    public function container($attributes = [])
    {
        if ($attributes instanceof Closure) {
            $container = new self();
            $container = call_user_func($attributes, $container) ?? $container;
        } elseif ($attributes instanceof self) {
            $container = $attributes;
        } else {
            $container = new self($attributes);
        }

        $this->add($container);

        return $container;
    }

    /**
     * Add a Header.
     *
     * @param string|array|Closure|Header|null $height
     * @param array                            $attributes
     *
     * @return Header
     */
    public function header($height = null, array $attributes = null)
    {
        if ($height instanceof Closure) {
            $header = new Header();
            $header = call_user_func($height, $header) ?? $header;
        } elseif ($height instanceof Header) {
            $header = $height;
        } else {
            $header = new Header($height, $attributes);
        }

        $this->add($header);

        return $header;
    }

    /**
     * Add a Footer.
     *
     * @param string|array|Closure|Footer|null $height
     * @param array                            $attributes
     *
     * @return Footer
     */
    public function footer($height = null, array $attributes = null)
    {
        if ($height instanceof Closure) {
            $footer = new Footer();
            $footer = call_user_func($height, $footer) ?? $footer;
        } elseif ($height instanceof Header) {
            $footer = $height;
        } else {
            $footer = new Footer($height, $attributes);
        }

        $this->add($footer);

        return $footer;
    }

    /**
     * Add a Aside.
     *
     * @param string|array|Closure|Aside|null $width
     * @param array                           $attributes
     *
     * @return Aside
     */
    public function aside($width = null, array $attributes = null)
    {
        if ($width instanceof Closure) {
            $aside = new Aside();
            $aside = call_user_func($width, $aside) ?? $aside;
        } elseif ($width instanceof Header) {
            $aside = $width;
        } else {
            $aside = new Aside($width, $attributes);
        }

        $this->add($aside);

        return $aside;
    }

    /**
     * Add a Main.
     *
     * @param array|Closure|Main $attributes
     *
     * @return Main
     */
    public function main($attributes = [])
    {
        if ($attributes instanceof Closure) {
            $main = new Main();
            $main = call_user_func($attributes, $main) ?? $main;
        } elseif ($attributes instanceof Header) {
            $main = $attributes;
        } else {
            $main = new Main($attributes);
        }

        $this->add($main);

        return $main;
    }
}
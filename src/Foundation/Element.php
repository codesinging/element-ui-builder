<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/14 19:45
 */

namespace CodeSinging\ElementUiBuilder\Foundation;

use CodeSinging\ComponentBuilder\Builder;
use CodeSinging\Support\Repository;

class Element extends Builder
{

    /**
     * The builder id.
     * @var int
     */
    protected $builderId;

    /**
     * The builder count.
     * @var int
     */
    protected static $builderCount = 0;

    /**
     * The builder config.
     * @var Repository
     */
    protected $config;

    /**
     * Element constructor.
     *
     * @param string     $tag
     * @param null       $content
     * @param array|null $attributes
     * @param bool       $closing
     * @param bool       $lineBreak
     */
    public function __construct(string $tag = 'div', $content = null, array $attributes = null, bool $closing = true, bool $lineBreak = false)
    {
        parent::__construct($tag, $content, $attributes, $closing, $lineBreak);
        $this->builderId = ++ self::$builderCount;
        $this->config = new Repository();
    }

    /**
     * Get the builder id.
     * @param string|null $prefix
     *
     * @return int|string
     */
    public function builderId(string $prefix = null)
    {
        return $prefix ? ($prefix . '_' . $this->builderId) : $this->builderId;
    }

    /**
     * Get or set builder config.
     *
     * @param string|array $key
     * @param mixed|null   $default
     *
     * @return $this|mixed
     */
    public function config($key, $default = null)
    {
        if (is_array($key)) {
            $this->config->set($key);
            return $this;
        } else {
            return $this->config->get($key, $default);
        }
    }

    /**
     * Set whether the component is buildable.
     *
     * @param bool $buildable
     *
     * @return $this
     */
    public function buildable(bool $buildable = true)
    {
        $this->config(compact('buildable'));
        return $this;
    }

    /**
     * Get whether the component is buildable.
     * @return bool
     */
    public function isBuildable()
    {
        return $this->config('buildable', true);
    }
}
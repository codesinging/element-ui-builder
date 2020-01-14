<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/13 10:02
 */

namespace CodeSinging\ElementUiBuilder\Foundation;

use CodeSinging\ComponentBuilder\Builder;
use CodeSinging\Support\Repository;
use CodeSinging\Support\Str;

class Component extends Builder
{
    /**
     * The component tag prefix.
     * @var string
     */
    protected $tagPrefix = 'el-';

    /**
     * The component's base tag.
     * @var string
     */
    protected $baseTag;

    /**
     * The component id.
     * @var int
     */
    protected $compId;

    /**
     * The component count.
     * @var int
     */
    protected static $compCount = 0;

    /**
     * The component config instance.
     * @var Repository
     */
    protected $config;

    /**
     * Component constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($this->tagPrefix . $this->baseTag(), null, $attributes, true, false);
        $this->compId = ++self::$compCount;
        $this->config = new Repository();
    }

    /**
     * Get the component's base tag.
     * @return string
     */
    public function baseTag()
    {
        return $this->baseTag ?: Str::kebab((basename(str_replace('\\', '/', get_class($this)))));
    }

    /**
     * Get the component id.
     *
     * @param string|null $prefix
     *
     * @return int|string
     */
    public function compId(string $prefix = null)
    {
        return $prefix ? ($prefix . '_' . $this->compId) : $this->compId;
    }

    /**
     * Get or set component config.
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
}
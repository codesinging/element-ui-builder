<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/13 10:02
 */

namespace CodeSinging\ElementUiBuilder\Foundation;

use CodeSinging\ComponentBuilder\Builder;
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
     * Component constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($this->tagPrefix . $this->baseTag(), null, $attributes, true, false);
    }

    /**
     * Get the component's base tag.
     * @return string
     */
    public function baseTag()
    {
        return $this->baseTag ?: Str::kebab((basename(str_replace('\\', '/', get_class($this)))));
    }

}
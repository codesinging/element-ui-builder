<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/14 19:45
 */

namespace CodeSinging\ElementUiBuilder\Foundation;

use CodeSinging\ComponentBuilder\Builder;

class Element extends Builder
{
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
    }
}
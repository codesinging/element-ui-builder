<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/17 10:58
 */

namespace CodeSinging\ElementUiBuilder\Elements;

use CodeSinging\ElementUiBuilder\Foundation\Element;

class SlotScopeTemplate extends Element
{
    protected $tag = 'template';
    
    protected $attributes = ['slot-scope' => 'scope'];
    
    public function __construct( $content = null, array $attributes = null, bool $closing = true, bool $lineBreak = false, $glue = '')
    {
        parent::__construct($this->tag, $content, $attributes, $closing, $lineBreak, $glue);
    }
}
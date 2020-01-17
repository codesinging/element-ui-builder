<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/17 18:12
 */

namespace CodeSinging\ElementUiBuilder\Components;

class InputPassword extends Input
{
    protected $baseTag = 'input';
    
    protected $attributes = [
        'show-password'
    ];
}
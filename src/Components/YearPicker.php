<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:10
 */

namespace CodeSinging\ElementUiBuilder\Components;

class YearPicker extends DatePicker
{
    protected $attributes = [
        'type' => 'year',
    ];

    protected $baseTag = 'date-picker';
}
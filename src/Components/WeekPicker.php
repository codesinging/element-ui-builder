<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:10
 */

namespace CodeSinging\ElementUiBuilder\Components;

class WeekPicker extends DatePicker
{
    protected $attributes = [
        'type' => 'week',
    ];

    protected $baseTag = 'date-picker';
}
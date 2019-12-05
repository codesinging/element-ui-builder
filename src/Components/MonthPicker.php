<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:28
 */

namespace CodeSinging\ElementUiBuilder\Components;

class MonthPicker extends DatePicker
{
    protected $props = [
        'type' => 'month',
    ];

    protected $baseTag = 'date-picker';
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:33
 */

namespace CodeSinging\ElementUiBuilder\Components;

class MonthRangePicker extends DatePicker
{
    protected $attributes = [
        'type' => 'monthrange',
    ];

    protected $baseTag = 'date-picker';
}
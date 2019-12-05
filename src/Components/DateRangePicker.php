<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:33
 */

namespace CodeSinging\ElementUiBuilder\Components;

class DateRangePicker extends DatePicker
{
    protected $props = [
        'type' => 'daterange',
    ];

    protected $baseTag = 'date-picker';
}
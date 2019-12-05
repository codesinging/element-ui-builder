<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:33
 */

namespace CodeSinging\ElementUiBuilder\Components;

class DateTimeRangePicker extends DatePicker
{
    protected $props = [
        'type' => 'datetimerange',
    ];

    protected $baseTag = 'date-picker';
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:41
 */

namespace CodeSinging\ElementUiBuilder\Components;

class DateTimePicker extends DatePicker
{
    protected $props = [
        'type' => 'datetime',
    ];

    protected $baseTag = 'date-picker';
}
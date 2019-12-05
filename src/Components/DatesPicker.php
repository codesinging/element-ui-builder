<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 16:10
 */

namespace CodeSinging\ElementUiBuilder\Components;

class DatesPicker extends DatePicker
{
    protected $props = [
        'type' => 'dates',
    ];

    protected $baseTag = 'date-picker';
}
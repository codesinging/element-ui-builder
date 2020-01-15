<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/15 16:28
 */

namespace CodeSinging\ElementUiBuilder\Composites;

use CodeSinging\ElementUiBuilder\Components\Button;
use CodeSinging\ElementUiBuilder\Components\TableColumn;
use CodeSinging\ElementUiBuilder\Foundation\Element;

class TableActionColumn extends TableColumn
{
    protected $baseTag = 'table-column';

    protected $attributes = [
        'align' => 'center',
        'class-name' => 'table-column-action',
        'width' => '240px',
    ];

    /**
     * Edit Button.
     * @var Button
     */
    public $editButton;

    /**
     * View Button.
     * @var Button
     */
    public $viewButton;

    /**
     * Delete Button.
     * @var Button
     */
    public $deleteButton;

    /**
     * ActionColumn constructor.
     *
     * @param null  $label
     * @param array $attributes
     */
    public function __construct( $label = null, array $attributes = [])
    {
        if (is_array($label)){
            parent::__construct($label);
        } else {
            parent::__construct(null, $label, $attributes);
        }
        $this->lineBreak()->glue();
    }

    protected function __init()
    {
        $this->editButton = new Button('编辑', 'success', [
            'size' => 'mini',
            '@click' => 'onItemEditClick(scope.row)',
        ]);

        $this->viewButton = new Button('查看', 'primary', [
            'size' => 'mini',
            '@click' => 'onItemViewClick(scope.row)',
        ]);

        $this->deleteButton = new Button('删除', 'danger', [
            'size' => 'mini',
            '@click' => 'onItemDeleteClick(scope.row)',
            ':loading' => 'statuses[\'delete_\' + scope.row.id]',
        ]);

        $this->add($this->editButton, $this->viewButton, $this->deleteButton);
    }

    protected function __build()
    {
        $template = new Element(
            'template',
            $this->content->all(),
            ['slot-scope' => 'scope'],
            true,
            true,
            true
        );

        $this->content($template);
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/16 11:35
 */

namespace CodeSinging\ElementUiBuilder\Composites;

use CodeSinging\ElementUiBuilder\Components\Checkbox;
use CodeSinging\ElementUiBuilder\Components\Form;

class FormDialog extends BaseDialog
{
    /**
     * The Form instance.
     * @var Form
     */
    public $form;

    /**
     * The automatic close checkbox.
     * @var Checkbox
     */
    protected $autoCloseCheckbox;

    protected function __init()
    {
        parent::__init();

        $this->form = new Form([
            'label-position' => 'top',
            'size' => 'medium',
        ]);

        $this->autoCloseCheckbox = new Checkbox(null, '保存成功后自动关闭');
    }

    /**
     * Initialize the form.
     *
     * @param string $name
     * @param string $model
     *
     * @return $this
     */
    public function initForm(string $name, string $model)
    {
        $this->form->ref($name)
            ->set(':model', $model);
        return $this;
    }

    protected function __build()
    {
        parent::__build();

        $this->add($this->form);

        $this->autoCloseCheckbox->vModel($this->storeKey('autoClose'))->css('mr-5');
        $this->actionContainer->prepend($this->autoCloseCheckbox);

        $this->store([$this->storeKey('autoClose') => true]);
    }
}
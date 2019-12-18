<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/17 13:21
 */

namespace CodeSinging\ElementUiBuilder\Composites;

use CodeSinging\ComponentBuilder\Element;
use CodeSinging\ElementUiBuilder\Components\Button;
use CodeSinging\ElementUiBuilder\Components\Dialog;

class EditDialog extends Dialog
{
    protected $baseTag = 'dialog';

    /**
     * Footer element.
     * @var Element
     */
    public $footer;

    /**
     * Confirm Button
     * @var Button
     */
    public $confirmButton;

    /**
     * Cancel Button
     * @var Button
     */
    public $cancelButton;

    /**
     * EditDialog constructor.
     *
     * @param string|null $title
     * @param string|null $content
     * @param array       $props
     */
    public function __construct(string $title = null, string $content = null, array $props = [])
    {
        parent::__construct($title, $content, $props);
        $this->initialize();
    }

    /**
     * Initialize.
     */
    protected function initialize()
    {
        $this->cancelButton = Button::instance('Cancel');

        $this->confirmButton = Button::instance('Confirm', 'primary');

        $this->footer = Element::instance()
            ->eol()
            ->glue()
            ->add($this->cancelButton)
            ->add($this->confirmButton)
            ->set('slot', 'footer');

        $this->add($this->footer);
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/15 18:21
 */

namespace CodeSinging\ElementUiBuilder\Composites;

use CodeSinging\ElementUiBuilder\Components\Button;
use CodeSinging\ElementUiBuilder\Components\Dialog;
use CodeSinging\ElementUiBuilder\Foundation\Element;

class BaseDialog extends Dialog
{
    protected $baseTag = 'dialog';

    /**
     * Dialog name
     * @var string
     */
    protected $name;

    /**
     * The cancel button of the dialog.
     * @var Button
     */
    public $cancelButton;

    /**
     * The confirm button of the dialog.
     * @var Button
     */
    public $confirmButton;

    /**
     * The zoom out button of the dialog.
     * @var Button
     */
    public $zoomOutButton;

    /**
     * The zoom in button of the dialog.
     * @var Button
     */
    public $zoomInButton;

    /**
     * The zoom buttons's container.
     * @var Element
     */
    public $zoomContainer;

    /**
     * The action buttons container.
     * @var Element
     */
    public $actionContainer;

    /**
     * BaseDialog constructor.
     *
     * @param null|string $name
     * @param null|string $title
     * @param string|null $sync
     * @param array       $attributes
     */
    public function __construct($name = null, $title = null, string $sync = null, array $attributes = [])
    {
        if (is_array($name)) {
            parent::__construct($name);
        } else {
            parent::__construct($title, $sync, $attributes);
            $this->name($name);
        }
    }

    /**
     * Set dialog name.
     *
     * @param string $name
     *
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Initialize.
     */
    protected function __init()
    {
        parent::__init();

        $this->cancelButton = new Button('取消');

        $this->confirmButton = new Button('确定', 'primary');

        $this->zoomOutButton = new Button(null, null, [
            'circle',
            'icon' => 'el-icon-plus',
            'size' => 'small',
        ]);

        $this->zoomInButton = new Button(null, null, [
            'circle',
            'icon' => 'el-icon-minus',
            'size' => 'small',
        ]);

        $this->zoomContainer = new Element(
            'div',
            [$this->zoomOutButton, $this->zoomInButton],
            ['class' => 'float-left mt-1'],
            true,
            true,
            true
        );

        $this->actionContainer = new Element(
            'div',
            [$this->cancelButton, $this->confirmButton],
            [],
            true,
            true,
            true
        );
    }

    /**
     * Get the store key.
     *
     * @param string|null $key
     *
     * @return string
     */
    public function storeKey(string $key = null)
    {
        return $this->name . ($key ? '.' . $key : '');
    }

    /**
     * Build
     */
    protected function __build()
    {
        parent::__build();

        $this->ref($this->name);

        $this->cancelButton->vClickBind($this->storeKey('visible'), false);

        $this->zoomOutButton->vClick(sprintf('onDialogZoomOutClick(\'%s\')', $this->name))
            ->set(':disabled', $this->storeKey('width>=100'));

        $this->zoomInButton
            ->vClick(sprintf('onDialogZoomInClick(\'%s\')', $this->name))
            ->set(':disabled', $this->storeKey('width<=60'));

        $footer = new Element(
            'div',
            [$this->zoomContainer, $this->actionContainer],
            null,
            true,
            true,
            true
        );

        $this->slot('footer', $footer);

        $this->set([
            ':visible.sync' => $this->storeKey('visible'),
            ':width' => $this->storeKey('width+\'%\''),
            ':top' => $this->storeKey('top+\'vh\''),
        ]);

        $this->store([
            $this->storeKey() => [
                'visible' => false,
                'width' => 60,
                'top' => 20,
            ]
        ]);
    }
}
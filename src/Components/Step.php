<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 11:02
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class Step
 *
 * @method $this title(string $title, $store = null)
 * @method $this description(string $description, $store = null)
 * @method $this icon(string $icon, $store = null)
 * @method $this status(string $status, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class Step extends Component
{
    // Status
    const STATUS_WAIT = 'wait';
    const STATUS_PROCESS = 'process';
    const STATUS_FINISH = 'finish';
    const STATUS_ERROR = 'error';
    const STATUS_SUCCESS = 'success';

    /**
     * Step constructor.
     *
     * @param string|array|null $title
     * @param string|null       $description
     * @param array             $attributes
     */
    public function __construct($title = null, string $description = null, array $attributes = null)
    {
        if (is_array($title)) {
            parent::__construct($title);
        } else {
            parent::__construct($attributes);
            $title and $this->set('title', $title);
            $description and $this->set('description', $description);
        }
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/6 12:03
 */

namespace CodeSinging\ElementUiBuilder\Components;

use CodeSinging\ElementUiBuilder\Foundation\Component;

/**
 * Class PageHeader
 *
 * @method $this title(string $title, $store = null)
 * @method $this content(string $content, $store = null)
 *
 * @package CodeSinging\ElementUiBuilder\Components
 */
class PageHeader extends Component
{
    /**
     * PageHeader constructor.
     *
     * @param string|array|null $title
     * @param string|null       $content
     * @param array             $attributes
     */
    public function __construct($title = null, string $content = null, array $attributes = null)
    {
        if (is_array($title)) {
            parent::__construct($title);
        } else {
            parent::__construct($attributes);
            $title and $this->set('title', $title);
            $content and $this->set('content', $content);
        }
    }
}
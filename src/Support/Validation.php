<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/16 18:40
 */

namespace CodeSinging\ElementUiBuilder\Support;

class Validation
{
    // When
    const WHEN_BOTH = 'both';
    const WHEN_ADD = 'add';
    const WHEN_EDIT = 'edit';

    /**
     * The validation rules.
     * @var array
     */
    protected $rules = [];

    /**
     * The validate time point.
     * @var string
     */
    public $when = self::WHEN_BOTH;

    /**
     * Validate constructor.
     *
     * @param array $rules
     */
    public function __construct(array $rules = [])
    {
        $this->rules = $rules;
    }

    /**
     * Set the validation time point.
     *
     * @param string $when
     *
     * @return $this
     */
    public function when(string $when)
    {
        $this->when = $when;
        return $this;
    }

    /**
     * Add a rule.
     *
     * @param array $rule
     *
     * @return $this
     */
    public function rule(array $rule)
    {
        $this->rules[] = $rule;
        return $this;
    }

    /**
     * Add a `required` rule.
     *
     * @param string $message
     * @param string $trigger
     *
     * @return $this
     */
    public function required(string $message = '不能为空', $trigger = 'change')
    {
        $this->rule([
            'required' => true,
            'message' => $message,
            'trigger' => $trigger,
        ]);
        return $this;
    }

    /**
     * Add a `limit` rule.
     *
     * @param int    $min
     * @param int    $max
     * @param string $message
     * @param string $trigger
     *
     * @return $this
     */
    public function limit(int $min, int $max, string $message = '长度范围为 %d 至 %d 之间', string $trigger = "change")
    {
        $this->rule([
            'min' => $min,
            'max' => $max,
            'message' => sprintf($message, $min, $max),
            'trigger' => $trigger,
        ]);
        return $this;
    }

    /**
     * Determine if the validation has rules.
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->rules);
    }

    /**
     * Get all the rules.
     * @return array
     */
    public function rules()
    {
        return $this->rules;
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/16 18:43
 */

namespace CodeSinging\ElementUiBuilder\Tests\Support;

use CodeSinging\ElementUiBuilder\Support\Validation;
use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{
    public function testWhen()
    {
        self::assertEquals(Validation::WHEN_BOTH, (new Validation())->when);
        self::assertEquals(Validation::WHEN_EDIT, (new Validation())->when('edit')->when);
    }

    public function testRule()
    {
        $rule = ['required' => true];
        $validation = new Validation();
        $validation->rule($rule);

        self::assertEquals([$rule], $validation->rules());
    }

    public function testRequired()
    {
        self::assertEquals(
            [
                [
                    'required' => true,
                    'message' => '不能为空',
                    'trigger' => 'change',
                ]
            ],
            (new Validation())->required()->rules()
        );
    }

    public function testLimit()
    {
        self::assertEquals(
            [
                [
                    'min' => 3,
                    'max' => 20,
                    'message' => '长度范围为 3 至 20 之间',
                    'trigger' => 'change',
                ]
            ],
            (new Validation())->limit(3, 20)->rules()
        );
    }

    public function testIsEmpty()
    {
        $validation = new Validation();
        self::assertTrue($validation->isEmpty());
        $validation->required();
        self::assertFalse($validation->isEmpty());
    }

    public function testRules()
    {
        self::assertEquals(
            [
                [
                    'required' => true,
                    'message' => '不能为空',
                    'trigger' => 'change',
                ]
            ],
            (new Validation())->rule([
                'required' => true,
                'message' => '不能为空',
                'trigger' => 'change',
            ])->rules()
        );
    }
}
<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/14 19:47
 */

namespace CodeSinging\ElementUiBuilder\Tests\Foundation;

use CodeSinging\ElementUiBuilder\Foundation\Element;
use CodeSinging\Support\Str;
use PHPUnit\Framework\TestCase;

class ElementTest extends TestCase
{

    public function testBuilderId()
    {
        self::assertTrue(is_int((new Element())->builderId()));
        self::assertTrue(Str::startsWith((new Element())->builderId('component'),'component_'));

    }

    public function testConfig()
    {
        $element = new Element();
        $element->config(['name' => 'demo']);

        self::assertEquals('demo', $element->config('name'));
    }

    public function testBuildableAndIsBuildable()
    {
        $element = new Element();
        self::assertTrue($element->isBuildable());
        $element->buildable(false);
        self::assertFalse($element->isBuildable());
        $element->buildable(true);
        self::assertTrue($element->isBuildable());
    }

}
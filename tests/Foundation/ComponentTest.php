<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2020/1/13 10:04
 */

namespace CodeSinging\ElementUiBuilder\Tests\Foundation;

use CodeSinging\ElementUiBuilder\Foundation\Component;
use PHPUnit\Framework\TestCase;

class ComponentTest extends TestCase
{
    public function testConstruct()
    {
        self::assertEquals('<el-component size="small" plain></el-component>', new Component(['size' => 'small', 'plain']));
    }

    public function testBaseTag()
    {
        self::assertEquals('example-component', (new ExampleComponent())->baseTag());
        self::assertEquals('example-tag', (new ExampleTagComponent())->baseTag());
    }

    public function testBuild()
    {
        self::assertEquals('<el-component></el-component>', new Component());
        self::assertEquals('<el-example-component></el-example-component>', new ExampleComponent());
        self::assertEquals('<el-exam-component></el-exam-component>', new ExamComponent());
    }
}

class ExampleComponent extends Component
{

}

class ExamComponent extends Component
{
    protected $tagPrefix = 'el-';
}

class ExampleTagComponent extends Component
{
    protected $baseTag = 'example-tag';
}

<?php
/**
 * Author: CodeSinging <codesinging@gmail.com>
 * Time: 2019/12/5 00:34
 */

namespace CodeSinging\ElementUiBuilder\Tests\Components;

use CodeSinging\ElementUiBuilder\Components\Container;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    public function testBuild()
    {
        self::assertEquals('<el-container>' . PHP_EOL . '</el-container>', new Container());
    }

    public function testContainer()
    {
        $container = new Container();
        $container->container();

        self::assertEquals(
            '<el-container>'
            . PHP_EOL . '<el-container>' . PHP_EOL . '</el-container>'
            . PHP_EOL . '</el-container>',
            $container->build()
        );
    }

    public function testHeader()
    {
        $container = new Container();
        $container->header('30px');

        self::assertEquals(
            '<el-container>'
            . PHP_EOL . '<el-header height="30px">' . PHP_EOL . '</el-header>'
            . PHP_EOL . '</el-container>',
            $container->build()
        );
    }

    public function testFooter()
    {
        $container = new Container();
        $container->footer('30px');

        self::assertEquals(
            '<el-container>'
            . PHP_EOL . '<el-footer height="30px">' . PHP_EOL . '</el-footer>'
            . PHP_EOL . '</el-container>',
            $container->build()
        );
    }

    public function testAside()
    {
        $container = new Container();
        $container->aside('30px');

        self::assertEquals(
            '<el-container>'
            . PHP_EOL . '<el-aside width="30px">' . PHP_EOL . '</el-aside>'
            . PHP_EOL . '</el-container>',
            $container->build()
        );
    }

    public function testMain()
    {
        $container = new Container();
        $container->main();

        self::assertEquals(
            '<el-container>'
            . PHP_EOL . '<el-main>' . PHP_EOL . '</el-main>'
            . PHP_EOL . '</el-container>',
            $container->build()
        );
    }

    public function testHeaderMainFooter()
    {
        $container = new Container();
        $container->header('30px');
        $container->main();
        $container->footer('30px');

        self::assertEquals(
            '<el-container>'
            . PHP_EOL . '<el-header height="30px">' . PHP_EOL . '</el-header>'
            . PHP_EOL . '<el-main>' . PHP_EOL . '</el-main>'
            . PHP_EOL . '<el-footer height="30px">' . PHP_EOL . '</el-footer>'
            . PHP_EOL . '</el-container>',
            $container->build()
        );
    }

    public function testHeaderContainer()
    {
        $container = new Container();
        $container->header('30px');
        $container->container(function (Container $innerContainer) {
            $innerContainer->aside('200px');
            $innerContainer->main();
        });

        self::assertEquals(
            '<el-container>'
            . PHP_EOL . '<el-header height="30px">' . PHP_EOL . '</el-header>'
            . PHP_EOL . '<el-container>'
            . PHP_EOL . '<el-aside width="200px">' . PHP_EOL . '</el-aside>'
            . PHP_EOL . '<el-main>' . PHP_EOL . '</el-main>'
            . PHP_EOL . '</el-container>'
            . PHP_EOL . '</el-container>',
            $container->build()
        );

    }
}
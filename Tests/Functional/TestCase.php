<?php
/**
 * @package CurlBundle
 *
 * @author Daniel Holzmann <d@velopment.at>
 * @date 18.08.13
 * @time 11:10
 */

namespace DVelopment\CurlBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Filesystem\Filesystem;

abstract class TestCase extends  WebTestCase
{
    protected static function createKernel(array $options = array())
    {
        $env = @$options['env'] ?: 'test';

        return new \DVelopment\CurlBundle\Tests\Functional\AppKernel($env, true);
    }

    protected function tearDown()
    {
        static::$kernel = null;
    }

    protected function setUp()
    {
        $fs = new Filesystem();
        $fs->remove(sys_get_temp_dir() . '/DVelopmentCurlBundle/');
    }

}
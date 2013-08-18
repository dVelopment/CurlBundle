<?php
/**
 * @package CurlBundle
 *
 * @author Daniel Holzmann <d@velopment.at>
 * @date 18.08.13
 * @time 11:04
 */
namespace DVelopment\CurlBundle\Tests\Functional;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    /**
     * Returns an array of bundles to registers.
     *
     * @return BundleInterface[] An array of bundle instances.
     *
     * @api
     */
    public function registerBundles()
    {
        $bundles = array(
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \JMS\SerializerBundle\JMSSerializerBundle(),
            new \DVelopment\CurlBundle\DVelopmentCurlBundle(),
        );

        return $bundles;
    }

    /**
     * Loads the container configuration
     *
     * @param LoaderInterface $loader A LoaderInterface instance
     *
     * @api
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir() . '/DVelopmentCurlBundle/';
    }
}
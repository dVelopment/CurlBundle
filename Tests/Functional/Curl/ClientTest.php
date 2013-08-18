<?php
/**
 * @package CurlBundle
 *
 * @author Daniel Holzmann <d@velopment.at>
 * @date 18.08.13
 * @time 10:39
 */

namespace DVelopment\CurlBundle\Tests\Functional\Curl;

use DVelopment\CurlBundle\Curl\Client;
use DVelopment\CurlBundle\Http\Request;
use DVelopment\CurlBundle\Tests\Functional\TestCase;

class ClientTestCase extends TestCase
{
    public function testExecute()
    {
        $kernel = $this->createKernel();
        $kernel->boot();
        $container = $kernel->getContainer();
        /** @var Client $client */
        $client = $container->get('d_velopment_curl.client');
        $request = new Request('http://www.google.com');

        $client->execute($request);
    }
}
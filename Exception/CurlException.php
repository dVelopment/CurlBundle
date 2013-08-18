<?php
/**
 * @package CurlBundle
 *
 * @author Daniel Holzmann <d@velopment.at>
 * @date 18.08.13
 * @time 10:23
 */

namespace DVelopment\CurlBundle\Exception;


class CurlException extends \RuntimeException
{
    public function __construct($status, $response, $url)
    {
        parent::__construct(sprintf("host responded with status code %d", $status));
    }
}
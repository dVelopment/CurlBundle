<?php
/**
 * @package: CurlBundle
 *
 * @author: daniel
 * @date: 18.08.13
 * @time: 09:22
 */

$file = __DIR__ . '/../vendor/autoload.php';

if (!file_exists($file)) {
    throw new \RuntimeException('Install dependencies to run test suite. "php composer.phar install --dev"');
}

require_once($file);
<?php

/*
 * Guzzle Proxy Configuration by Remote User
 */

require 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$client->request('POST', 'http://localhost/httpoxy/log', [
    'secret' => 'some-really-secret-string'
]);

echo "Request sent\n";

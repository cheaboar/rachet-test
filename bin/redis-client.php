<?php

    require dirname(__DIR__) . '/vendor/autoload.php';
    $client = new Predis\Client('tcp://127.0.0.1:6379');
    $client->set('foo', 'bar');
    $value = $client->get('foo');
    var_dump($value);
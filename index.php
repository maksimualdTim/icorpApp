<?php
use App\services\AmoApiService;
use App\services\Db;

header('Access-Control-Allow-Origin: *');

include_once __DIR__ . '/vendor/autoload.php';

$service = new AmoApiService([
    'clientId' => '545c3888-6a42-4e99-9c6f-dbdf7b7d63ed',
    'clientSecret' => 'gQ38ggVfwZfuo9cR8G2XstAdXLUWf1SQeq6ABj8dnOYx5yhnuacORX3vsMRQ7job',
    'redirectUri' => 'https://10c9-82-215-98-110.eu.ngrok.io',
]);


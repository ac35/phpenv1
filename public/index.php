<?php
use Medoo\Medoo;

require_once '../vendor/autoload.php';

echo 'Hello world';

$database = new Medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);

dump($database);

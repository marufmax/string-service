<?php

declare(strict_types=1);

// autoload dependencies
use MarufMax\String\Service\Csv;
use MarufMax\String\String\Stringify;

require '../vendor/autoload.php';

$argument = $argv;

if(!isset($argument[1])) {
    echo("Please specify input string" . PHP_EOL);
    exit(1);
}

/** global const for project root directory */
const ROOT_DIR = __DIR__ . '/..';

// removing 'cli' from argument array.
// which is not part of input data\
array_shift($argument);

$stringify = new Stringify(implode(' ', $argument));
$csv = new Csv();

echo $stringify->toUpperCase() . PHP_EOL;
echo $stringify->toAlternateCase() . PHP_EOL;
$csv->create($stringify->toArray(), ROOT_DIR . '/output.csv');
echo 'CSV created' . PHP_EOL;
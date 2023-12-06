<?php
require_once 'NameGenerator.php';

$nameGenerator = new NameGenerator();

for ($i = 0; $i < 10; $i++) {
    echo "Generated Name: " . $nameGenerator->generateName() . PHP_EOL;
}
?>

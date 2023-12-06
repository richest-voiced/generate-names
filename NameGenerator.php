<?php
require_once 'Prefixes.php';
require_once 'Suffixes.php';

class NameGenerator {
    public function generateName() {
        // Logic to combine random prefixes and suffixes
        return Prefixes::getRandomPrefix() . Suffixes::getRandomSuffix();
    }
}
?>

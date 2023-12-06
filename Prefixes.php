<?php
class Prefixes {
    private static $prefixes = ["Alpha", "Beta", "Gamma", "Delta", "Epsilon"];

    public static function getRandomPrefix() {
        return self::$prefixes[array_rand(self::$prefixes)];
    }
}
?>

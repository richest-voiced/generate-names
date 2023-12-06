<?php
class Suffixes {
    private static $suffixes = ["Corp", "Industries", "Solutions", "Technologies", "Labs"];

    public static function getRandomSuffix() {
        return self::$suffixes[array_rand(self::$suffixes)];
    }
}
?>

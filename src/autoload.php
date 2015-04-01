<?php
/**
 * Created by IntelliJ IDEA.
 * User: yousan
 * Date: 4/1/15
 * Time: 9:34 PM
 */

spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'yousan\\yalib\\yalib' => '/yalib.php',
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
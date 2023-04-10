<?php

class Input {
    public static function exists($type = null) {
    return (isset($_POST[$type])) ? true : (isset($_GET[$type])) ? true : false;
    }

    public static function get($item) {
        if(isset($_POST[$item])) {
            return $_POST[$item];
        } else if(isset($_GET[$item])) {
            return $_GET[$item];
        }

        return '';
    }
}



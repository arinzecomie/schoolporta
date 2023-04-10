<?php
// Modify by Arinze on 9/18/2020.
class Hash {
    public static function make($string, $salt = '') {
        return hash('sha256', $string . $salt);
    }

    public static function salt() {
        //return random_bytes($length);
       return 'Fr.P.Chukwukebe'; 
    }

    public static function unique($length) {
        //return self::make(uniqid());
        return random_bytes($length);
    }
}

?>
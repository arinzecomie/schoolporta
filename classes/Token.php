<?php
/**
 * Modify by Arinze on 9/18/2020.
 */

class Token {
    public static function generate($toka = null) {
        if ($toka) {
            return Session::put(Config::get('sessions/token_nameoda'), md5(uniqid()));
        }else{
            return Session::put(Config::get('sessions/token_name'), md5(uniqid()));
        }
                
    }
               
           

    public static function check($token) {
        $tokenName = Config::get('sessions/token_name');
        $tokenName2 = Config::get('sessions/token_nameoda');
        if(Session::exists($tokenName) && $token === Session::get($tokenName)) {
            Session::delete($tokenName);
            return true;
        }else if (Session::exists($tokenName2) && $token === Session::get($tokenName2)){
            Session::delete($tokenName2);
            return true;
        }

        return false;
    }
}
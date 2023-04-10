<?php


class User {
    private $_db,
            $_data,
            $_sessionName,
            $_cookieName,
            $_count,
            $_newdata,
            $term,
            $isLoggedIn;
            

    public function __construct($user = null) {
        $this->_db = DB::getInstance();
        $this->_sessionName = Config::get('sessions/session_name');
       // $this->_cookieName = Config::get('remember/cookie_name');

        if(!$user) {
            if(Session::exists($this->_sessionName)) {
                $user = Session::get($this->_sessionName);

                if($this->find($user)) {
                    $this->isLoggedIn = true;
                } else {
                    //Logout
                    $this->logout();
                }
            }
        } else {
            $this->find($user);
        }
    }


 public function rowquery($query,$data){
     $this->_db->query($query,$data);
}


    public function deletus($input,$fields) {
         $data = $this->_db->delete($input,$fields); 
            if($data->countr()) {
                $this->_newdata = $data->results();
                $this->_count = $data->countr();
                return true;
            }  

        } 
        
    public function create( $table,$fields = array()) {

        if(!$this->_db->insert($table, $fields)) {
            throw new Exception('Sorry, there was a problem creating your account;');
        }
    }

    public function updateuser( $table,$fields = array(), $value = null) {
          
        if(!$value) {
            $value[] = 'users_id';
            $value[] = '=';
            $value[] = $this->data()->users_id;
        }
        
   
        if(!$this->_db->update($table, $value, $fields)) {
            throw new Exception('There was a problem updating');
        }
    }


    public function find($user = null) {
  
        if($user) {
            $field = (is_numeric($user)) ? 'users_id' : 'user_code';
            $data = $this->_db->get('users', array($field, '=', $user));

            if($data->countr()) {
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }


public function asstable($table){
    $sql ="CREATE table $table(
     asses_id INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     stud_code VARCHAR( 30 ) NOT NULL, 
     subj_id INT( 3 ) NOT NULL, 
     asses_1 VARCHAR( 10 ) NOT NULL, 
     asses_2 VARCHAR( 10 ) NOT NULL, 
     asses_3 VARCHAR( 10 ) NOT NULL,
     exam VARCHAR( 10 ) NOT NULL,
     class INT( 2 ) NOT NULL,
     term INT( 2 ) NOT NULL);" ; 
    $this->_db->tables($sql);
}



    public function findoder($input,$fields = null) {
        if(!$fields){
        $field = (is_numeric($input)) ? 'users_id' : 'user_code';
        $data = $this->_db->get('users', array($field, '=', $input));
        if($data->countr()) {
            $this->_newdata = $data->first();
            return true;
        }
        }else{
            $data = $this->_db->get($input,$fields); 
            if($data->countr()) {
                $this->_newdata = $data->results();
                $this->_count = $data->countr();
                return true;
            }  
        }
           
    
        return false;
    }


 
  public function grader($totals) {
return ($totals > 74) ? 'A' : (($totals > 59) ? 'B' : (($totals > 55) ? 'C' : ($totals > 49) ? 'P' : 2  )) ;
  }
    
    public function  getdata($sfield ,$table,$where){
        $data = $this->_db->selector($sfield ,$table,$where); 
            if($data->countr()) {
                $this->_newdata = $data->results();
                $this->_count = $data->countr();
                return true;
            } 
        
    }
    
    
    
    
    public function login($user_code = null, $password = null, $cook = false) {
        // if(!$username && !$password && $this->exists()) {
        //     Session::put($this->_sessionName, $this->data()->id);
        //     Session::put($this->_sessionName, $this->data()->id);
        // } else {
            $user = $this->find($user_code);
            if ($user) {
                if ($this->data()->password === Hash::make($password, Hash::salt())) {
                   Session::put($this->_sessionName, $this->data()->users_id);
                   $this->findoder('trem_note',['id','=',1]);
                   Session::put('asst', $this->newdata()[0]->asstable);
                   Session::put('termst', $this->newdata()[0]->term);
                  
                   
                    // if ($remember) {
                    //     $hash = Hash::unique(32);
                    //     $hashCheck = $this->_db->get('users_session', array('user_id', '=', $this->data()->id));

                    //     if (!$hashCheck->countr()) {
                    //         $this->_db->insert('users_session', array(
                    //             'user_id' => $this->data()->id,
                    //             'hash' => $hash
                    //         ));
                    //     } else {
                    //         $hash = $hashCheck->first()->hash;
                    //     }

                    //     Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
                    // }
                    
                    return $this->data()->priority;
                }
            }
       // }
        return false;
    }

    // public function json($key,$group = $this->data()->priority)) {
        
    //         $permissions = json_decode($group, true);

    //         return !empty($permissions[$key]);
    //         }

    public function exists() {
        return (!empty($this->_data)) ? true : false;
    }
    public function  userdel($table,$where){
         
            if($this->_db->delete($table,$where)) {
                return true;
            } 
        
    }
    public function logout() {
        // if(Cookie::exists($this->_cookieName)){
        // $this->_db->delete('users_session', array('user_id', '=', $this->data()->id));
        // Cookie::delete($this->_cookieName);
        //   }
        Session::delete($this->_sessionName);
        
    }
    public function newdata(){
        return $this->_newdata;
    }
    public function data(){
        return $this->_data;
    }
    public function efcount(){
        return $this->_count;
    }
    public function isLoggedIn() {
        return $this->isLoggedIn;
    }
}
<?php
class DB {
    private static $_instance = null;
    private $_pdo,
            $_query,
            $_error = false,
            $_results,
            $_lastid,
            $_count = 0;

    private function __construct() {
        try {
            $this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance() {
        if(!isset(self::$_instance)) {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

//defalt query
    // 'select * from col where fei = ?',array($params)
    public function query($sql, $params = array()) {
    //  echo $sql;
    //  print_r($params);
        $this->_error = false;
        $this->_pdo->beginTransaction();
             if($this->_query = $this->_pdo->prepare($sql)) {
            $x = 1;
            if(count($params)) {
                foreach($params as $param) {
                    $this->_query->bindValue($x, $param);
                    
                    $x++;

                }
            }
          

            if($this->_query->execute()) {
               
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
                $this->_pdo->commit();
               // $this->_lastid = $this->_query->lastInsertId();
            } else {
                 
                   throw new Exception('Sorry, execute function has stop ');
                $this->_pdo->rollBack();
                $this->_error = true;
            }
        }

        return $this;
    }

public function tables($table){
     return  $this->_pdo->exec($table);
}

//array($user_id ,'AND', 'subject', '=' ,$user_id,'1')));
//('SELECT ',array('user_id','user','me'),'exam',array('user_id', '=' ,1)
    public function action($action, $sfield = array(), $table, $where = array()) {
        if(is_array($where[0])){
           
            $field ='';
             foreach($where as $dinput){
                
              if(is_array($dinput)){
               $exec[] = $dinput[2];
                $dinput[2]= "?";  
               $field .= implode(' ',$dinput);
                
              }else{
               $field .= " $dinput ";  
              }
               
           } 
            }else{
                $exec[] = $where[2]; 
                $where[2] = " ? ";
                $field = implode(' ',$where); 

            } 
           
          $sfieldin  = implode(' , ',$sfield);
 
          $sql = "{$action} {$sfieldin} FROM {$table} WHERE {$field}";
        //   echo  "<br> $sql <br>";
        //   print_r($exec);
                if(!$this->query($sql,$exec)->error()) {
                    //to bind pdo
                    
                    return $this;
                }
            

       // }

        return false;
    }


    public function insert($table, $fields = array()) {
        $keys = array_keys($fields);
        $values = null;
        $x = 1;

        foreach($fields as $field) {
            $values .= '?';
            if ($x < count($fields)) {
                $values .= ', ';
            }
            $x++;
        }
     //back tick is to excape field name
        $sql = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES ({$values})";
          //echo $sql;

        if(!$this->query($sql, $fields)->error()) {
            return true;
        }

        return false;
    }
    
    public function update($table, $val, $fields) {
        
        
          
          
        
        $set = '';
        $input = array();
        $x = 1;
      
        foreach($fields as $name => $value) {
            $set .= "{$name} = ?";
            $input[]= $value;
            if($x < count ($fields)) {
                $set .= ', ';
            }
            $x++;
        }
       
       if(is_array($val[2])){
            $value = $val[2]; 
            unset($val[2]) ;
            $input[] = $value[0] ;
            $value[0] = " ? ";
            $input[] =$value[4];
            $value[4] = " ? ";
            $field = implode(' ',array_merge($val,$value));
            //$exec = array_merge($f_value,$s_value);
            }else{
                $input[] = $val[2]; 
                $val[2] = " ? ";
                $field = implode(' ',$val); 

            } 
       
            $tinput = array_merge($input,$exec);

        $sql = "UPDATE {$table} SET {$set} WHERE  {$field}";
        //  print_r($input);
        //  echo '<br>';
        //   die($sql);
        if(!$this->query($sql, $input)->error()) {
            return true;
        }

        return false;
    }


    public function delete($table, $where) {
        return $this->action('DELETE ',array(' '), $table, $where);
    }

    public function get($table, $where) {
        return $this->action('SELECT',array('*'), $table, $where);
    }
    
    public function selector($sfield ,$table,$where){
        return $this->action('SELECT ', $sfield , $table, $where);
    }
    public function results() {
        return $this->_results;
    }

    public function first() {
        $data = $this->results();
        return $data[0];
    }

    public function countr() {
        return $this->_count;
    }
    public function dlast() {
        return $this->_lastid;
    }

    public function error() {
        return $this->_error;
    }
}
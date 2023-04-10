<?php
/**
 * Modify by Arinze on 9/18/2019.
 */

class Validate {
    private $_passed = false;
    private $_errors = array();
    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstance();
    }

    public function check($source, $items = array()) {
        foreach($items as $item => $rules) {
            foreach($rules as $rule => $rule_value) {
                $value = $source[$item];
                $item = escape($item);

                if($rule === 'required' && empty($value)) {
                    $this->addError("{$item} is required");
                } else if (!empty($value)) {
                    switch($rule) {
                        case 'min':
                            if(strlen($value) < $rule_value) {
                                $this->addError("{$item} must be a minimum of {$rule_value} characters.");
                            }
                            break;

                        case 'max':
                            if(strlen($value) > $rule_value) {
                                $this->addError("{$item} must be a maximum of {$rule_value} characters.");
                            }
                            break;
                        case 'matches':
                            if($value != $source[$rule_value]) {
                                $this->addError("{$rule_value} must match {$item}.");
                            }
                            break;
                        case 'unique':
                            $this->_db->get($rule_value, array($item, '=', $value));

                            if($this->_db->countr()) {
                                $this->addError("{$value} already exists.");
                            }
                            break;
                       case 'newstaff':
                                $this->_db->get($rule_value, array($item, '=', $value));
                               
                                if(!$this->_db->countr()) {
                                    $this->addError("{$value} is incorrect please check the code and try agian.");
                                }else if($this->_db->first()->prio == 0){
                                    $this->addError(" Sorry {$value} has already registed a staff.");
                                }else{
                                    $_SERVER['prio'] = $this->_db->first()->prio; 
                                }
                         break;      
                    }
                }
            }
        }

        if(empty($this->_errors)) {
            $this->_passed = true;
        }
    }

    private function addError($error) {
        $this->_errors[] = $error;
    }

    public function errors() {
        return $this->_errors;
    }

    public function passed() {
        return $this->_passed;
    }
}
